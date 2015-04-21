-- Each of the 'stats_' executibles corresponds to a number of reads done. stats1 has 1, stats2 has two, etc.
-- Corresponds to file ../PHP Files/stats.php

import qualified Data.ByteString as B
import qualified Data.ByteString.Char8 as C
import Data.Word8
import Data.List

main = do
    content  <- B.readFile "/Users/Nickolas/Documents/onehundred.txt"
    content2 <- readFile "/Users/Nickolas/Documents/onehundred.txt"
    content3 <- readFile "/Users/Nickolas/Documents/onehundred.txt"
    content4 <- readFile "/Users/Nickolas/Documents/onehundred.txt"
    content5 <- readFile "/Users/Nickolas/Documents/onehundred.txt"
    if '(' `C.elem` content
        then putStrLn "Elem"
        else putStrLn "Not elem"
    let numbers = [1..]
    putStrLn $ show $ head $ sort [10000,9999..1]