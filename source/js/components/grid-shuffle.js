import Shuffle from 'shufflejs'

class GridShuffle {
    constructor(element) {
        this.element = element
        this.activeFilters = []
        this.shuffle = new Shuffle(element, {
            itemSelector: '.treatment',
            sizer: '.sizer',
        })

        this.addEventListeners()
    }

    addEventListeners() {
        document.querySelector('.shuffle-search').addEventListener('keyup', this.handleSearchKeyup.bind(this))
        var filter = document.getElementsByClassName('filter-category')
        filter = Array.from(filter)
        filter.forEach(function (checkbox) {
            checkbox.addEventListener('click', this.handleFilterChange.bind(this), false)
        }, this)
    }

    handleSearchKeyup(event) {
        var searchText = event.target.value.toLowerCase()

        this.shuffle.filter(function (element, shuffle) {
            var titleText = element.getAttribute('data-title').toLowerCase().trim()
            return titleText.indexOf(searchText) !== -1
        })
    }

    handleFilterChange(event) {
        var btn = event.currentTarget
        var btnGroup = btn.getAttribute('data-group')
        this.activeFilters = []
        this.activeFilters.push(btnGroup)
        btn.classList.toggle('active')
        this.shuffle.filter(this.activeFilters)
    }
}

document.addEventListener('DOMContentLoaded', function () {
    window.grid_shuffle = new GridShuffle(document.getElementById('grid-treatments'))
})