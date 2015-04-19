module Handler.Read where

import Import
import qualified Data.ByteString as B

getReadR :: Handler Html
getReadR = do
    contents <- liftIO $ B.readFile "/Users/Nickolas/Documents/write.txt"
    defaultLayout [whamlet|Contents of text.txt: #{show contents}|]