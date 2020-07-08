<template>
    <div class="filters-content">
        <div class="row grid">
            <div class="col-lg-12 mx-auto">
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <select @change="changePerPage" class="form-control form-control-lg rounded-0">
                            <option selected>10</option>
                            <option>20</option>
                            <option>25</option>
                            <option>50</option>
                            <option>100</option>
                        </select>
                    </div>
                  <input type="text" v-model="query" name="query" class="form-control form-control-lg rounded-0" placeholder="Search here">
                </div>
                 <div>
                    <div class="d-flex justify-content-between">
                     <nav class="pagination mt-2 mb-4">
                        <span class="page-stats">
                            Showing {{ pagination.from }} -
                            {{ pagination.to }} of
                            {{ pagination.totalItems }}
                            <span
                                v-if="
                                    `filteredLibrarycontents.length < pagination.totalItems`
                                "
                            ></span>
                        </span>
                        <a class="ml-2 btn btn-sm pagination-previous btn-danger rounded-0 text-white"  v-if="pagination.onFirstPage"  disabled>
                            Prev
                        </a>
                        <a v-else class="btn btn-sm btn-danger rounded-0 text-white pagination-previous" @click="--pagination.currentPage">
                            Prev
                        </a>
                        <a class="ml-2 btn btn-sm pagination-next btn-danger rounded-0 text-white" v-if="pagination.onLastPage" disabled
                        >
                            Next
                        </a>
                        <a
                            v-else
                            class="ml-2 btn btn-sm btn-danger rounded-0 text-white pagination-next"
                            @click="++pagination.currentPage"
                        >
                            Next
                        </a>
                    </nav>
                    <div class="d-flex">
                        <div class="mr-2">
                            <a @click.prevent="addContent" class="btn btn-lg text-white rounded-0 btn-danger">Add Content</a>
                        </div>
                        <div class="input-group-prepend">
                            <select class="form-control form-control-lg rounded-0">
                                <option>All</option>
                                <option>Books</option>
                                <option>Speeches</option>
                                <option>Novels</option>
                            </select>
                        </div>
                    </div>
                    </div>
                    </div>
                </div>
                 <!-- ======= Blog Section ======= -->
                <section id="blog" class="blog">
                  <div class="container">

                    <div class="row">

                      <div v-for="(content,index) in pagination.collection"
                        :key="content.id" class="col-lg-4  col-md-6 d-flex align-items-stretch" data-aos="fade-up">
                            <article class="entry">
                                <div class="entry-img">
                                    <img src="assets/img/blog-1.jpg" alt="" class="img-fluid">
                                 </div>

                              <h2 class="entry-title">
                                <a  style="cursor:pointer" @click="showContent(content)">{{content.title}}</a>
                              </h2>

                              <div class="entry-meta">
                                <ul>
                                  <li class="d-flex align-items-center"><i class="icofont-user"></i> <a href="blog-single.html">Not Published</a></li>
                                  <li v-if="content.category !== null" class="d-flex align-items-center"><i class="icofont-wall-clock"></i> {{content.category.title}}</li>
                                </ul>
                              </div>

                              <div class="entry-content">
                                <p>
                                  {{content.abstract}}
                                </p>
                                <div class="read-more">
                                  <a style="cursor:pointer" @click="showContent(content)">Read More</a>
                                </div>
                              </div>

                            </article><!-- End blog entry -->
                      </div>
                    </div>
                  </div>
                </section><!-- End Blog Section -->
                <nav class="pagination mt-2 mb-4">
                    <span class="page-stats">
                        Showing {{ pagination.from }} -
                        {{ pagination.to }} of
                        {{ pagination.totalItems }}
                        <span
                            v-if="
                                `filteredLibrarycontents.length < pagination.totalItems`
                            "
                        ></span>
                    </span>
                    <a class="ml-2 btn btn-sm pagination-previous btn-danger rounded-0 text-white"  v-if="pagination.onFirstPage"  disabled>
                        Prev
                    </a>
                    <a v-else class="btn btn-sm btn-danger rounded-0 text-white pagination-previous" @click="--pagination.currentPage">
                        Prev
                    </a>
                    <a class="ml-2 btn btn-sm pagination-next btn-danger rounded-0 text-white" v-if="pagination.onLastPage" disabled
                    >
                        Next
                    </a>
                    <a
                        v-else
                        class="ml-2 btn btn-sm btn-danger rounded-0 text-white pagination-next"
                        @click="++pagination.currentPage"
                    >
                        Next
                    </a>
                </nav>
                </div>

        </div>
    </div>
            </div>
        </div>
    </div>
  </div>
</template>
<script>

import Paginator from "../paginator/Paginator.js";
export default {
    props:['dataLibrary'],
    data() {
        return {
            librarycontents: [],
            query:"",
            rows: [],
            librarycontent: {}
        };
    },
    created() {
        this.fetchLibrarycontents();
        console.log(JSON.parse(this.dataLibrary))
    },
    methods: {
        changePerPage(event) {
            this.librarycontents.perPage = event.target.value;
        },
        addContent(){
            window.location = '/library/create';
        },
        showContent(journal){
            window.location = `/library/${journal.id}`;
        },
         fetchLibrarycontents() {
            try {
                this.librarycontents = new Paginator(JSON.parse(this.dataLibrary));
                this.rows = this.librarycontents.items;
            } catch (error) {
                console.log(error);
            }
        },
        performFilter(library) {
            return library.filter((row) => {
                return Object.keys(row).some((key) => {
                    return (String(row[key]).toLowerCase().indexOf(this.query.toLowerCase()) >-1);
                    });
                }
            );
        }
    },

    computed: {
        filteredLibrarycontents() {
            this.librarycontents.items = this.rows;
            if (this.query) {
                return this.performFilter(this.librarycontents.items);
            }
            return this.librarycontents.items;
        },
        pagination() {
            let librarycontents = this.librarycontents;
            librarycontents.items = this.filteredLibrarycontents;
            return librarycontents;
        }
    }
};
</script>
<style
    lang="sass"
    scoped
></style>
