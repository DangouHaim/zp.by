const themePath = require("./variables/var")["themePath"];
const siteName = "" + require("./variables/var")["siteName"];
const siteProxy = "" + require("./variables/var")["siteProxy"];
const gulp = require("gulp");
const $ = require("gulp-load-plugins")();
const bsync = require("browser-sync");

module.exports = function (options) {
    return function () {
        bsync.init({
            open: 'external',
            host: siteName,
            proxy: siteProxy,
            port: 80
        });
        bsync.watch(options.watch).on("change", bsync.reload);
    }
}