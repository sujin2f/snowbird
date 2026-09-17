import domReady from "@wordpress/dom-ready";
import { registerBlockVariation } from "@wordpress/blocks";

import "./styles/index.scss";

domReady(() => {
  registerBlockVariation("core/button", {
    title: "Custom Embed",
    name: "custom-embed",
    attributes: { providerNameSlug: "custom" },
  });

  console.log(1);
});

const a = (b: string) => {
  console.log(b);
};
