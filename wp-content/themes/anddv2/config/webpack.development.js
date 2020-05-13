const BrowserSyncPlugin = require('browser-sync-webpack-plugin');
const env = require('./env');

module.exports = () => ({
  plugins: [
    new BrowserSyncPlugin({
      proxy: env.proxy,
      port: 3010,
      files: [
        './../',
        './../api/**/*.php',
        './../api/*.php',
        './',
        '!./node_modules',
        '!./yarn-error.log',
        '!./package.json',
        '!./style.css.map',
        '!./app.js.map',
        './../../plugins/chess-trainer/dist/public.js',
        './../../plugins/chess-trainer/dist/chessboardjs/js/chessboard-0.3.0.js'
      ],
      reloadDelay: 0,
    })
  ]

});
