module Handler.Database where

import Import

getDatabaseR :: Handler Html
getDatabaseR = do
	people <- runDB $ selectList ([] :: [Filter Twert]) []
	defaultLayout [whamlet|Person: #{show people}|]
