const path = require('path');
const MiniCssExtractPlugin = require('mini-css-extract-plugin');

module.exports = {
  entry: './assets/src/app.js',
  output: {
    filename: 'js/main.js',
    path: path.resolve(__dirname, 'assets/')
  },
  mode:'development',
  plugins: [new MiniCssExtractPlugin({
    filename: 'css/main.css'
  })],
  module: {
    rules: [
      {
        test: /\.(scss)$/,
        use: [
          // Creates `style` nodes from JS strings
          'style-loader',
          {
            loader: MiniCssExtractPlugin.loader,
            options: {
              
            },
          },
          // Translates CSS into CommonJS
          'css-loader',
          // Compiles Sass to CSS
          'sass-loader',
        ]
      }
    ]
  }
};
