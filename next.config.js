const million = require('million/compiler');
const withNextra = require('nextra')({
  theme: 'nextra-theme-docs',
  themeConfig: './theme.config.tsx',
})

module.exports = million.next(
  withNextra()
, { auto: true }
)