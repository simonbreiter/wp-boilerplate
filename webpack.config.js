let path = require('path')

module.exports = {
    context: path.join(__dirname, '/wp-content/themes/boilerplate/js/'),
    entry: {
        javascript: './main.js'
    },
    output: {
        path: path.join(__dirname, '/wp-content/themes/boilerplate/js/'),
        filename: './bundle.js'
    },
    resolveLoader: {
        root: path.resolve(__dirname, 'node_modules')
    },
    module: {
        loaders: [
            {
                test: /\.js$/,
                exclude: /node_modules/,
                loader: "babel-loader",
                query: {
                    presets: ['babili']
                }
            }
        ]
    }
};