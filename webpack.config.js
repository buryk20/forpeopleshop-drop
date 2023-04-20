const path = require('path')

module.exports = {
    mode: 'production',
    entry: {
        filename: path.resolve(__dirname, 'src/index.js')
    },
    output: {
        path: path.resolve(__dirname, 'public/js/'),
        filename: 'index.js'
    }
}