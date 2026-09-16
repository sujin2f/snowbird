import domReady from "@wordpress/dom-ready";
import { registerBlockVariation } from "@wordpress/blocks";

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
