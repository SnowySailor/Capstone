-- Corresponds to file ..../PHP Files/database.php
module Handler.Database where

import Import

getDatabaseR :: Handler Html
getDatabaseR = do
	people <- runDB $ selectList ([] :: [Filter Person]) []
	defaultLayout [whamlet|Person: #{show people}|]
