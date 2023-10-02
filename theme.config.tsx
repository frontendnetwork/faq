import React from 'react'
import { DocsThemeConfig } from 'nextra-theme-docs'
import { useRouter } from 'next/router'

const config: DocsThemeConfig = {
  logo: <span>FrontendNetwork FAQ</span>,
  project: {
    link: 'https://github.com/frontendnetwork/faq',
  },
  docsRepositoryBase: 'https://github.com/frontendnetwork/faq/tree/main/pages',
  footer: {
    text: 'This work is licensed under CC BY 4.0 by FrontendNetwork',
  },
  useNextSeoProps() {
    const { asPath } = useRouter();
    if (asPath !== '/') {
      return {
        titleTemplate: '%s – FAQ'
      };
    } else {
      return {
        titleTemplate: '%s'
      };
    }
  }
}

export default config
