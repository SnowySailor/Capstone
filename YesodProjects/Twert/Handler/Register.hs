module Handler.Register where

import Import

personForm :: Form User
personForm = renderTable $ User
    <$> areq textField "Desired username" Nothing
    <*> areq emailField "Email" Nothing
    <*> areq passwordField "Password" Nothing

getRegisterR :: Handler Html
getRegisterR = do
    (widget, enctype) <- generateFormPost personForm
    defaultLayout 
        [whamlet|
            <p>
                Enter your information to register!
            <form method=post action=@{RegisterR} enctype=#{enctype}>
                <table>
                    ^{widget}
                <button>Submit
        |]

postRegisterR :: Handler Html
postRegisterR = do
    ((result, widget), enctype) <- runFormPostNoToken personForm
    case result of
        FormSuccess person -> do
                            existing <- (\(User name _ _) -> runDB $ selectList [UserIdent ==. name] []) person
                            case null existing of
                                True -> do
                                            personKey <- runDB $ insert $ person
                                            defaultLayout [whamlet|Success! Here is your person: #{show personKey}|]
                                _    -> do
                                            defaultLayout 
                                                [whamlet|
                                                    <p>That username is already taken. Please try another.
                                                    <form method=post action=@{RegisterR} enctype=#{enctype}>
                                                        <table>
                                                            ^{widget}
                                                        <button>Submit
                                                |]
        _ -> defaultLayout 
                [whamlet|
                    <p>Invalid input. Let's try again.
                    <form method=post action=@{RegisterR} enctype=#{enctype}>
                        <table>
                            ^{widget}
                        <button>Submit
                |]