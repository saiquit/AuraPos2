import "./bootstrap";

const sidebar = document.getElementById("sidebar");
const dragHandle = document.getElementById("dragHandle");
let isResizing = false;

dragHandle.addEventListener("mousedown", function (e) {
    isResizing = true;
    document.addEventListener("mousemove", resizeSidebar);
    document.addEventListener("mouseup", stopResize);
});

function resizeSidebar(e) {
    if (isResizing) {
        const sidebarWidth = e.clientX - sidebar.getBoundingClientRect().left;
        sidebar.style.width = `${sidebarWidth}px`;
        dragHandle.style.left = `${sidebarWidth - 10}px`;
    }
}

function stopResize() {
    isResizing = false;
    document.removeEventListener("mousemove", resizeSidebar);
    document.removeEventListener("mouseup", stopResize);
}
