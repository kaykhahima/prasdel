if ("serviceWorker" in navigator) {
    window.addEventListener("load", async e => {
        navigator.serviceWorker.register("sw.js");
    });
}
