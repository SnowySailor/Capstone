# Capstone
If you've stumbled upon this, you are able to see my adventures in learning how to use Yesod and how I compare it to PHP. We'll see how it goes.

##Use
If you want to use any of the projects and stuff, you'll need to first get `cabal`, which comes with [Haskell for Mac OSX](https://ghcformacosx.github.io/). 

You will need MySQL for this. In each Yesod project, there is a `settings.yml` file that you will need to populate with your own MySQL credentials and information.

After installing that and following the isntructions, navigate to one of the Yesod projects and do a `cabal install alex happy yesod yesod-bin` to install a few dependencies. Then you'll do `cabal install --dependencies-only`. This may run for a while.

Once everything has installed without error, run `yesod devel` to start the server. Each time you save a file, it will recompile the code as fast as it can. Default port for running any of my apps is 3000 on your localhost.

##Compiling A Project
Once you've finished developing the Yesod app, `cd` into the app root and execute `cabal clean` to clean stuff up. Then run `cabal configure && cabal build` to create an executible in ./dist/build/PROJECTNAME/. Pull that into a new directory with the `config` and `static` directories (or your project root directory) and then just run it. 