// ----------------------------------------------------------------
// Block: accordion
// ----------------------------------------------------------------

class Accordion {
  containerNode;
  items = [];

  constructor(sectionId) {
    const that = this;

    this.containerNode = document.getElementById(sectionId);

    this.containerNode.querySelectorAll(".acc-item").forEach((node) => {
      const item = {
        node: node,
        headerNode: node.querySelector(".acc-item-header"),
        contentNode: node.querySelector(".acc-item-content"),
        toggleBtnNode: node.querySelector(".acc-item-toggle-btn"),
        isOpen: null,
      };
      that.items.push(item);
      that.hideContent(item);
      item.headerNode.onclick = function () {
        that.toggleContent(item);
      };
      console.log(item);
    });
  }

  showContent(item) {
    this.hideAllContents();
    item.contentNode.style.display = "block";
    item.node.classList.add("open");
    item.isOpen = true;
  }

  hideContent(item) {
    item.contentNode.style.display = "none";
    item.node.classList.remove("open");
    item.isOpen = false;
  }

  hideAllContents() {
    const that = this;
    this.items.forEach((item) => {
      that.hideContent(item);
    });
  }

  toggleContent(item) {
    if (item.isOpen) {
      this.hideContent(item);
    } else {
      this.showContent(item);
    }
  }
}
