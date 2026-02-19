<script>
  function toggleNL() {
    const nl = document.getElementById("nl");
    const isOpen = nl.getAttribute("data-open") === "true";
    nl.setAttribute("data-open", !isOpen);
  }
</script>

<section id="nl" data-open="false" class="p-0">
  <div class="cliccable py-3" onclick="toggleNL()">
    <div class="container-fluid no-max-width">
      <div class="row">
        <div class="col-12 d-flex align-items-center justify-content-between">
          <h4 class="d-inline-block mb-0 mr-2">Iscriviti alla newsletter</h4>
          <span class="arr">&darr;</span>
        </div>
      </div>
    </div>
  </div>
  <div class="showhide">
    <form action="https://e1f2e.emailsp.com/frontend/subscribe.aspx">
      <div class="container-fluid no-max-width pt-5">
        <div class="row">

          <div class="col-xl-3 col-sm-6">
            <!-- <label>Nome*</label> -->
            <input type="text" rel="1" name="campo1" id="campo1" placeholder="Nome*" maxlength="200" required="required" />
          </div>

          <div class="col-xl-3 col-sm-6">
            <!-- <label>Cognome*</label> -->
            <input type="text" rel="2" name="campo2" id="campo2" placeholder="Cognome*" maxlength="200" required="required" />
          </div>

          <div class="col-xl-3 col-sm-6">
            <!-- <label>Profilo professionale*</label> -->
            <select name="campo16" id="campo16" required="required">
              <option value="" selected="selected">Profilo professionale*</option>
              <option value="Agronomo">Agronomo</option>
              <option value="Imprenditore Agricolo">Imprenditore Agricolo</option>
              <option value="Altro">Altro</option>
            </select>
          </div>

          <div class="col-xl-3 col-sm-6">
            <!-- <label>Email*</label> -->
            <input type="email" name="email" id="email" placeholder="Email*" required="required">
          </div>

          <input type="hidden" name="group" value="1652">

          <div class="col-xl-6">
            <label class="small">
              <input type="checkbox" name="privacy" required="required" class="mr-1" />
              <span>Do il mio consenso alla conservazione dei miei dati personali per ricevere aggiornamenti via email sui futuri webinar, eventi o attività di Tornatura, come indicato nell’Informativa sulla
                <a class="d-inline" href="https://www.tornatura.it/f/policy-newsletter-tornatura.pdf" target="_blank">Privacy Policy</a>. *</span>
            </label>
          </div>
          <div class="col-xl-3">
            <label class="small">
              <input type="checkbox" name="privacy" required="required" class="mr-1" />
              <span>Ho preso visione della
                <a href="https://www.tornatura.it/f/24-04-2025-informativa-privacy-app-tornatura.pdf" target="_blank">Privacy Policy</a>. *
              </span>
            </label>
          </div>
          <div class="col-xl-3 my-3 mt-xl-0">
            <button type="submit" name="submit" value="true" class="w-100">
              Iscriviti
            </button>
          </div>
          <input type="hidden" id="apgroup" name="apgroup" value="1675">
          <input type="hidden" name="list" value="48">
        </div>
      </div>
    </form>
  </div>
</section>