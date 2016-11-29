module.exports = {

  // Build Tasks
  build: [{
    // SCSS Build Task
    task: 'scss',
    desc: 'Compiles and minifies SCSS',
    options: [{
      input   : 'src/scss/_baseweb.scss',
      output  : 'dist/css/baseweb.css',
      paths   : ['src/scss/'],
      style   : 'expanded'
    }, {
      input   : 'src/scss/_baseweb.scss',
      output  : 'dist/css/baseweb.min.css',
      paths   : ['src/scss/'],
      style   : 'compressed'
    }]
  }, {
    // JS Build Task
    task: 'js',
    desc: 'Compiles and minifies JS',
    options: [{
      input : [
        'src/js/jquery.function.js',
        'src/js/jquery.docready.js'
      ],
      output : 'dist/js/scripts.min.js'
    }]
  }],

  // Watch Tasks
  watch: [{
    // SCSS Watch Task
    task: 'scss',
    files: [
      'src/scss/'
    ]
  },{
    task: 'js',
    files: [
      'src/js/'
  ]
  }
]

};
