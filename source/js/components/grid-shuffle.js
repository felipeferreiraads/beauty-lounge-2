import Shuffle from 'shufflejs'

class GridShuffle {
	constructor(element) {
		this.element = element
		this.activeFilters = []
		this.shuffle = new Shuffle(element, {
			itemSelector: '.grid-brick',
			sizer: '.sizer',
		})

		this.addEventListeners()
	}

	addEventListeners() {
		document.querySelector('.sort-select').addEventListener('change', this.handleSortChange.bind(this))

		var filterCheck = document.getElementsByClassName('checkbox')
		filterCheck = Array.from(filterCheck)
		filterCheck.forEach(function(checkbox) {
			checkbox.addEventListener('click', this.handleFilterChange.bind(this), false)
		}, this)
	}

	handleSortChange(event) {
		var value = event.target.value

		function sortByDate(element) {
			console.log(element.getAttribute('data-course'))
			return element.getAttribute('data-course')
		}

		var options
		if (value === 'reverse') {
			options = {
				reverse: true,
				by: sortByDate
			}
		}
		else {
			options = {}
		}
		this.shuffle.sort(options)
	}

	handleFilterChange(event) {
		var btn = event.currentTarget
		var isActive = btn.classList.contains('active')
		var btnGroup = btn.getAttribute('data-group')
		if (isActive) {
			this.activeFilters.splice(this.activeFilters.indexOf(btnGroup))
		} else {
			this.activeFilters.push(btnGroup)
		}

		btn.classList.toggle('active')
		console.log(this.activeFilters)
		this.shuffle.filter(this.activeFilters)
	}
}

document.addEventListener('DOMContentLoaded', function () {
	window.grid_shuffle = new GridShuffle(document.getElementById('grid-courses'))
})