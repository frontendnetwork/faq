import React from "react";
import { DocsThemeConfig } from "nextra-theme-docs";
import { useRouter } from "next/router";
import Logo from "./components/logo";

const config: DocsThemeConfig = {
  logo: (
    <Logo />
  ),
  project: {
    link: "https://github.com/frontendnetwork/faq",
  },
  docsRepositoryBase: "https://github.com/frontendnetwork/faq/tree/main/",
  footer: {
    text: "This work is licensed under CC BY 4.0 by FrontendNetwork",
  },
  useNextSeoProps() {
    const { asPath } = useRouter();
    if (asPath !== "/") {
      return {
        titleTemplate: "%s – FEN MetaTag Documentation",
      };
    } else {
      return {
        titleTemplate: "%s",
      };
    }
  },
};

export default config;
