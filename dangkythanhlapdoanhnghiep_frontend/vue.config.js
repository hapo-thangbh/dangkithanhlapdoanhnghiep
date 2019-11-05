// vue.config.js
const path = require('path')
module.exports = {
  chainWebpack: config => {
    const types = ['vue-modules', 'vue', 'normal-modules', 'normal']
    types.forEach(type => addStyleResource(config.module.rule('stylus').oneOf(type)))
    config.module.rules.delete('eslint')
  },
  devServer: {
    disableHostCheck: true
  }
}

function addStyleResource (rule) {
  rule.use('sass')
    .loader('sass-loader')
    .options({
      patterns: [
        path.resolve(__dirname, './src/styles/admin/main.scss'),
        path.resolve(__dirname, './src/styles/frontend/main.scss')
      ]
    })
}
