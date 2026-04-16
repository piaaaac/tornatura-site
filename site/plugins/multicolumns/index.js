panel.plugin("piaaaac/multicolumns", {
  blocks: {
    multicolumns: {
      // --- attempt to display nested blocks in the preview ---
      // template: `
      //   <div class="k-multicolumns-preview" @click="open">
      //     <div class="k-multicolumns-grid" :style="gridStyle">
      //       <div v-for="(col, i) in cols" :key="i" class="k-multicolumns-col">
      //         <div v-for="block in col.blocks" :key="block.id">
      //           <k-block :block="block" style="border: 1px solid rgba(128, 128, 128, 0.2);" />
      //         </div>
      //       </div>
      //     </div>
      //   </div>
      // `,
      template: `
        <div class="k-multicolumns-preview" @click="open">
          <div class="k-multicolumns-grid" :style="gridStyle">
            <div v-for="(col, i) in cols" :key="i" class="k-multicolumns-col">
              <div>{{col.labelforpanel}}</div>
            </div>
          </div>
        </div>
      `,

      computed: {
        cols() {
          return this.content.columns || [];
        },

        gridStyle() {
          const frs = this.cols.map((col) => {
            // width is "4 / 12" → extract the first number
            const w = parseInt(col.width, 10) || 12;
            return `${w}fr`;
          });

          return {
            display: "grid",
            gap: "1rem",
            gridTemplateColumns: frs.join(" "),
          };
        },
      },

      mounted() {
        console.log("first col:", this.cols[0]);
      },
    },
  },
});
