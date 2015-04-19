module Handler.Twert where

import Handler.Feed
import Import

postTwertR :: Handler Html
postTwertR = do
    ((result, widget), enctype) <- runFormPost $ twertForm
    case result of
        FormSuccess twert -> do
                                twertKey <- runDB $ insert twert
                                redirect FeedR
        _ -> defaultLayout
                [whamlet|
                    <p>Oops. Looks like there was an error. Please try agian.
                    <form method=post action=@{TwertR} enctype=#{enctype}>
                        <table>
                            ^{widget}
                        <button>Submit
                |]

getTwertR :: Handler Html
getTwertR = redirect FeedR