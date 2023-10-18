module.exports = {
  root: true,
  env: {
    browser: true,
    node: true,
  },
  parserOptions: {
    parser: '@babel/eslint-parser',
    requireConfigFile: false,
  },
  extends: [
    '@nuxtjs',
    'plugin:nuxt/recommended',
  ],
  plugins: [],
  // add your custom rules here
  rules: {
    'no-tabs': 0,
    'comma-dangle': ['error', 'always-multiline'],
    'indent': ['error', 'tab'],
    'semi': ['error', 'always'],
    'vue/singleline-html-element-content-newline': 'off',
    'vue/multiline-html-element-content-newline': 'off',
    'vue/multi-word-component-names': 'off',
    'vue/html-self-closing': ['error', {
      'html': {
        'void': 'always',
        'normal': 'never',
        'component': 'any',
      },
    }],
    'vue/html-indent': ['error', 'tab'],
    'vue/no-v-html': 'off',
    'space-before-function-paren': ['error', 'never'],
    'multiline-ternary': ['error', 'never'],
    'arrow-parens': ['error', 'always'],
  },
  globals: {
    '$': 'readonly',
  },
}
