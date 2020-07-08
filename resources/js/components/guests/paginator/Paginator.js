export default class Paginator {
    constructor(items, currentPage = 1, perPage = 10) {
        this._items = items;
        this._currentPage = currentPage;
        this._perPage = perPage;
    }

    set items(items) {
        this._currentPage = 1;
        this._items = items;
    }

    get items() {
        return this._items;
    }

    set currentPage(currentPage) {
        this._currentPage = currentPage;
    }

    get currentPage() {
        return this._currentPage;
    }

    set perPage(perPage) {
        this._perPage = perPage;
    }

    get perPage() {
        return this._perPage;
    }

    get totalItems() {
        return this.items.length;
    }

    get from() {
        return (this.currentPage - 1) * this.perPage;
    }

    get to() {
        let end = this.from + this.perPage;

        if (end < this.totalItems) {
            return end;
        }
        return this.totalItems;
    }
    get onFirstPage() {
        return this.currentPage == 1;
    }

    get onLastPage() {
        return this.currentPage == this.lastPage;
    }

    get lastPage() {
        return Math.ceil(this.totalItems / this.perPage);
    }

    get collection() {
        return this.items.slice(
            (this.currentPage - 1) * this.perPage,
            this.currentPage * this.perPage,
        );
    }
}
