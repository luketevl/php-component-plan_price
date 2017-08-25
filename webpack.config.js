const ExtractTextPlugin = require('extract-text-webpack-plugin');
const path = require('path');

module.exports = {
  entry: ['./scss/main.scss'],
  output: {
    path: path.resolve(__dirname, "dist"),
    filename: 'bundle.js'
  },
  module: {

    rules: [
      
      /*
      your other rules for JavaScript transpiling go in here
      */
      { // regular css files
        test: /\.css$/,
        use: ExtractTextPlugin.extract({
          loader: 'css-loader?importLoaders=1&minimize',
        }),
      },
      { // sass / scss loader for webpack
        test: /\.(sass|scss)$/,
        use: ExtractTextPlugin.extract(['css-loader?minimize', 'sass-loader'])
      },
     
         {
        test: /\.woff(2)?(\?v=[0-9]\.[0-9]\.[0-9])?$/,
        use: [
          {
            loader: 'url-loader',
            options: {
              limit: 10000,
              mimetype: 'application/font-woff'
            }
          }
        ]
      },
      {
        test: /\.(ttf|eot|svg)(\?v=[0-9]\.[0-9]\.[0-9])?$/,
        use: [
          { loader: 'file-loader' }
        ]
      }
    ]
  },
  resolve:{
    alias:{
      'fonts': path.resolve(__dirname, 'fonts')
    }
  },
  plugins: [
    new ExtractTextPlugin({ // define where to save the file
      filename: '[name].bundle.css',
      allChunks: true,
    })
  ],
};