const brainersi = document.getElementById("brainersi");

async function wait(miliseconds) {
    return new Promise(resolve => setTimeout(resolve, miliseconds));
}

async function appendWithDelay(textArray) {
    for(const element of textArray) {
        const node = document.createTextNode(element);
        brainersi.appendChild(node);
        await new Promise(resolve => setTimeout(resolve, 100));
    }
}

addEventListener("load", async (event) => {
    await wait(1000);
    let text = ["B", "R", "A", "I", "N", "E", "R", "S", "I"];
    appendWithDelay(text);
});
