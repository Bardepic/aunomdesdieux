const path = require('path');
const webpackMerge = require("webpack-merge");

const modeConfig = env => require(`./config/webpack.${env}`)(env);
const presetConfig = require("./config/loadPresets");

const CopyWebpackPlugin = require('copy-webpack-plugin');

module.exports = ({ mode, presets } = { mode: "production", presets: [] }) => {
    return webpackMerge(
      {
          mode,
          entry: [
              path.resolve(__dirname, 'assets/js/app.js'),
              path.resolve(__dirname, 'assets/sass/app.scss'),
          ],
          output: {
              path: path.resolve(__dirname, 'dist'),
              filename: 'js/app.js',
          },
          module: {
              rules: [
                  {
                      test: /\.scss/,
                      use: [
                          {
                              loader: 'file-loader',
                              options: {
                                  name: 'css/[name].css',
                              }
                          },
                          {
                              loader: 'extract-loader'
                          },
                          {
                              loader: 'css-loader',
                              options: {
                                url: false,
                              }
                          },
                          {
                              loader: 'postcss-loader'
                          },
                          {
                              loader: 'sass-loader'
                          }
                      ]
                  },
                  {
                      test: /\.jpe?g$|\.gif$|\.png|\.svg$/i,
                      loader: "file-loader",
                      options: {
                          name: "img/[name].[ext]",
                          publicPath: "../",
                      }
                  }
              ]
          },
          plugins: [
              new CopyWebpackPlugin([
                  {
                      from: './*',
                      to: './img',
                      context: './assets/img'
                  }
              ])
          ]
      },
      modeConfig(mode),
      presetConfig({ mode, presets })
    );
};
