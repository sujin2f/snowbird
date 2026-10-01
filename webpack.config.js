const defaultConfig = require("@wordpress/scripts/config/webpack.config");
const path = require("path");

module.exports = {
  ...defaultConfig,
  entry: {
    ...defaultConfig.entry(),
    index: path.resolve(process.cwd(), "src/index.ts"),
    // "secondary-logo": path.resolve(
    //   process.cwd(),
    //   "src/secondary-logo/index.js",
    // ),
  },
};
