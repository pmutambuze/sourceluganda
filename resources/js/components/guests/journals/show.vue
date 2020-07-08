<template>
  <div class="single-services">
    <div class="container">
      <div class="row" id="tabs">
        <div class="col-md-3">
          <ul>
            <li>
              <router-link to="/"
                >Journal Home <i class="fa fa-angle-right"></i
              ></router-link>
            </li>
            <li>
              <router-link
                :to="{ name: 'layout', params: { layout: journal.layout } }"
                >Paper Layout <i class="fa fa-angle-right"></i
              ></router-link>
            </li>
            <li>
              <router-link
                :to="{
                  name: 'publication',
                  params: { publication: journal.paperpublication }
                }"
                >Publication process <i class="fa fa-angle-right"></i
              ></router-link>
            </li>
            <li>
              <router-link
                :to="{
                  name: 'paymentpolicy',
                  params: { paymentpolicy: journal.payment_policy }
                }"
                >Payment Policy <i class="fa fa-angle-right"></i
              ></router-link>
            </li>
            <li>
              <router-link
                :to="{
                  name: 'plagiarismpolicy',
                  params: { plagiarism: journal.plagiarism }
                }"
                >Plagiarism Policy <i class="fa fa-angle-right"></i
              ></router-link>
            </li>
            <li>
              <router-link
                :to="{
                  name: 'academicmisconduct',
                  params: { misconduct: journal.academic_misconduct }
                }"
                >Academic Misconduct <i class="fa fa-angle-right"></i
              ></router-link>
            </li>
            <li>
              <router-link to="/downloadsection"
                >Download Section <i class="fa fa-angle-right"></i
              ></router-link>
            </li>
            <li>
              <router-link to="/currentissue"
                >Current Issue <i class="fa fa-angle-right"></i
              ></router-link>
            </li>
            <li>
              <router-link to="/pastissue"
                >Past Issue <i class="fa fa-angle-right"></i
              ></router-link>
            </li>
          </ul>
        </div>
        <router-layout></router-layout>
      </div>
    </div>
  </div>
</template>
<script>
import routeLayout from "./routeLayout";
export default {
  props: ["dataJournal"],
  components: {
    "router-layout": routeLayout
  },
  data() {
    return {
      journal: this.dataJournal
    };
  },
  created() {
    console.log(this.journal);
  },
  computed: {
    id() {
      return $route.params.id;
    }
  }
};
</script>
