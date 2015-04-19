module Handler.Feed where

import Import

twertForm :: Html -> MForm Handler (FormResult Twert, Widget)
twertForm = renderTable $ Twert
    <$> areq textField "Title:" Nothing
    <*> areq textField "Content:" Nothing
    <*> lift (liftIO getCurrentTime)
    -- Let's just give them the user id of 1 for testing purposes. 
    <*> areq hiddenField "" (Just 1)

-- Here we basically authenticate everyone who looks here. 
ggetAuth :: (IsString a, Monad m) => m (Maybe a)
ggetAuth = do return $ Just "hi"

getFeedR :: Handler Html
getFeedR = do
    (widget, enctype) <- generateFormPost twertForm
    mAuthId <- ggetAuth
    twerts <- runDB $ selectList ([] :: [Filter Twert]) [Desc TwertTime]
    defaultLayout $ do
        setTitle "Twert Feed"
        $(widgetFile "twert-feed")