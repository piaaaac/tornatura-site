panel.plugin("piaaaac/textnested", {
  blocks: {
    textnested: {
      template: `
        <div class="k-block-textnested-preview">
          <div v-html="content.text" />
        </div>
      `,
      computed: {
        content() {
          return this.block.content;
        },
      },
    },
  },
});
