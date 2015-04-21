-- Corresponds to file ..../PHP Files/write.php
module Handler.Write where

import Import
import Data.ByteString.Lazy as B

getWriteR :: Handler Html
getWriteR = do
    liftIO $ B.writeFile "/Users/Nickolas/Documents/write.txt" "The quick brown fox jumps over the lazy dog."
    defaultLayout [whamlet|Written|]