# Contribute to iSC Inc.'s `festival` project

## Using [Git Large File Storage (LFS)](https://git-lfs.github.com/)

Setup LFS:

    git lfs init
    git lfs help

Use it for this project:

    cat .gitattributes
    git lfs track "*.zip"
    git lfs track

Check it again:

    cat .gitattributes

Commit:

    git add my.zip
    git commit -m "add zip"
    git lfs ls-files
    git push origin master

Untrack file types:

    git lfs untrack "*.zip"
