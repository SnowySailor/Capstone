module Handler.GetTwert where

import Import

getGetTwertR :: TwertId -> Handler Html
getGetTwertR twert = do
    twerts <- runDB $ selectList [TwertId ==. twert] []
    case not $  null twerts of
        True -> do
                    defaultLayout
                        [whamlet|
                                <h1>Twert:
                                $forall Entity twertId twert <- twerts
                                    <p><b>Title:</b> #{twertTitle twert}
                                    <p><b>Content:</b> #{twertContent twert}
                                    <p>Id: #{show twertId}
                                    <br>
                        |]
        _    -> do
                    defaultLayout
                        [whamlet|
                            <p>No twert found
                        |]
