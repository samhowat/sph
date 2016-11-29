## Build Scripts

BaseWeb uses [Node](https://nodejs.org/), [Jake](http://jakejs.com/) and [Jake-Builds](https://github.com/sebnitu/jake-builds) for building both the source and docs. For more information on how to update build scripts using this stack, make sure to checkout [Jake-Builds](https://github.com/sebnitu/jake-builds).

### Node Packages
Run `sudo npm install` to install required node modules for build scripts. This is the following node stack used to build BaseWeb assets and documentation files:

| Node Modules   | Versions   | Description |
|----------------|------------|-------------|
| `node-watch`   | `0.4.*`    | Used in handling the watch task |
| `node-sass`    | `3.10.*`   | Used for compiling and minifying CSS from SCSS files |
| `uglify-js`    | `2.7.*`    | Used to compile and minify our JavaScript files |

### Jake Tasks
To see the full list of available Jake tasks for a project, use `jake -ls`. The following tasks are available for building BaseWeb and related files:

| Jake Tasks            | Description                                          |
|-----------------------|------------------------------------------------------|
| `jake build`          | Build everything                                     |
| `jake build:scss`     | Compiles and minifies SCSS                           |
| `jake build:js`       | Compiles and minifies JS                             |
| `jake watch`          | Watch for change to files and rebuild if they change |

## Copyright and License

BaseWeb and BaseWeb documentation copyright (c) 2016 [Sebastian Nitu](http://sebnitu.com). BaseWeb is released under the [MIT license](https://github.com/sebnitu/BaseWeb/blob/master/LICENSE) and BaseWeb documentation is released under [Creative Commons](https://github.com/sebnitu/BaseWeb/blob/master/docs/LICENSE).
