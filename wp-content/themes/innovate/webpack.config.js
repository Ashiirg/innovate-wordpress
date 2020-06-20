const path = require('path')
// const HTMLWebpackPlugin = require('html-webpack-plugin')
// const {CleanWebpackPlugin} = require('clean-webpack-plugin')
// const CopyWebpackPlugin = require('copy-webpack-plugin')
const MiniCssExtractPlugin = require('mini-css-extract-plugin')
// const OptimizeCssAssetWebpackPlugin = require('optimize-css-assets-webpack-plugin')
// const TerserWebpackPlugin = require('terser-webpack-plugin')

const isDev = process.env.NODE_ENV === 'development'
const isProd = !isDev

// const optimization = () => {
//   const config = {
//     splitChunks: {
//       chunks: 'all'
//     }
//   }

//   if (isProd) {
//     config.minimizer = [
//       new OptimizeCssAssetWebpackPlugin(),
//       new TerserWebpackPlugin()
//     ]
//   }

//   return config
// }

const filename = ext => isDev ? `[name].${ext}` : `[name].[hash].${ext}`

const cssLoaders = extra => {
  const loaders = [
    {
      loader: MiniCssExtractPlugin.loader,
      options: {
        hmr: isDev,
        reloadAll: true
      },
    },
    'css-loader'
  ]

  if (extra) {
    loaders.push(extra)
  }

  return loaders
}

module.exports = {
  context: path.resolve(__dirname, 'src'),
  mode: 'development',
  entry: {
    main: ['@babel/polyfill', './js/index.js']
  },
  output: {
    filename: "js/[name].js",
    path: path.resolve(__dirname, 'dist')
  },
  // optimization: optimization(),
  devServer: {
    port: 8080,
    hot: isDev
  },
  // devtool: isDev ? 'source-map' : '',
  plugins: [
    // new HTMLWebpackPlugin({
    //   template: './index.html',
    //   minify: {
    //     collapseWhitespace: isProd
    //   }
    // }),
    // new CleanWebpackPlugin(),
    // new CopyWebpackPlugin({
    //   patterns: [
    //     { from: 'img', to: 'img' }
    //   ],
    // }),
    new MiniCssExtractPlugin({
      filename: "css/[name].css"
    })
  ],
  module: {
    rules: [
      {
        test: /\.css$/,
        use: cssLoaders()
      },
      {
        test: /\.scss$/,
        use: cssLoaders('sass-loader')
      },
      {
        test: /\.(png|jpg|svg|gif)$/,
        use: [
          {
            loader: 'file-loader',
            options: {
              name: 'img/[name].[ext]',
              publicPath: '../'
            }
          }
        ]
      },
      // {
      //   test: /\.(ttf|woff|woff2|eot)$/,
      //   use: [
      //     {
      //       loader: 'file-loader',
      //       options: {
      //         name: 'fonts/[name].[ext]'
      //       }
      //     }
      //   ]
      // },
      {
        test: /\.js$/,
        exclude: /node_modules/,
        loader: {
          loader: 'babel-loader',
          options: {
            presets: [
              '@babel/preset-env'
            ],
            plugins: [
              '@babel/plugin-proposal-class-properties'
            ]
          }
        }
      }
    ]
  }
}