/*class Carousel{

    constructor (element, options = {}){
        this.element = element
        this.options = Object.assign({}, {
            slidesToScroll: 1,
            slidesVisible: 1,
            loop: false,
            infinite: false
        }, options)
        let children = [].slice.call(element.children)
        this.isMobile = false
        this.currentItem = 0
        this.root = this.createDivWithClass('carousel')
        this.container = this.createDivWithClass('carousel-container')
        this.root.appendChild(this.container)
        this.element.appendChild(this.root)
        this.moveCallBacks = []
        this.items = children.map((child) => {
            let item = this.createDivWithClass('carousel-item')
            item.appendChild(child)
            return item
        })
        if (this.options.infinite) {
             this.offset = this.options.slidesVisible * 2 - 1
            this.items = [
                ...this.items.slice(this.items.length - this.offset).map(item => item.cloneNode(true)),
                ...this.items,
                ...this.items.slice(0, this.offset).map(item => item.cloneNode(true)),
            ]
            this.gotoItem(this.offset, false)
        }
        this.items.forEach(item => this.container.appendChild(item))
        this.setStyle()
        this.createNavigation()
        this.moveCallBacks.forEach(cb => cb(this.currentItem))
        this.onWindowResize()
        window.addEventListener('resize', this.onWindowResize.bind(this))
        if (this.options.infinite) {
            this.container.addEventListener('transitionend', this.resetInfinite.bind(this))
        }
    }

    setStyle (){
        let ratio = this.items.length / this.slidesVisible
        this.container.style.width = (ratio * 100) +"%"
        this.items.forEach(item => item.style.width = ((100 / this.slidesVisible) / ratio) + "%")
    }

    createNavigation () {
        let nextButton = this.createDivWithClass('carousel-next')
        let prevButton = this.createDivWithClass('carousel-prev')
        this.root.appendChild(nextButton)
        this.root.appendChild(prevButton)
        nextButton.addEventListener('click', this.next.bind(this))
        prevButton.addEventListener('click', this.prev.bind(this))
        if (this.options.loop === true){
            return
        }
        this.onMove(index => {
            if (index === 0) {
                prevButton.classList.add('carousel-prev-hidden')
            }else {
                prevButton.classList.remove('carousel-prev-hidden')
            }

            if (this.items[this.currentItem + this.slidesVisible] === undefined) {
                nextButton.classList.add('carousel-next-hidden')
            } else {
                nextButton.classList.remove('carousel-next-hidden')
            }
        })
    }

    next () {
        this.gotoItem(this.currentItem + this.slidesToScroll)
    }

    prev () {
        this.gotoItem(this.currentItem - this.slidesToScroll)
    }

    gotoItem (index, animation = true) {
        if (index < 0) {
            if (this.options.loop){
                index = this.items.length - this.slidesVisible
            } else {
                return
            }
        }else if (index >= this.items.length || (this.items[this.currentItem + this.options.slidesVisible] === undefined && index > this.currentItem)) {
            if (this.options.loop) {
                index = 0
            } else {
                return
            }
        }
        let translateX = index * - 100 / this.items.length
        if (animation === false){
            this.container.style.transition = "none";
        }
        this.container.style.transform = 'translate3d(' + translateX + '%, 0, 0)'
        this.container.offsetHeight
        if (animation === false) {
            this.container.style.transition = "";
        }
        this.currentItem = index
        this.moveCallBacks.forEach(cb => cb(index))
    }

    resetInfinite() {
        if (this.currentItem <= this.options.slidesToScroll){
            this.gotoItem(this.currentItem + this.items.length  - 2 * this.offset, false)
        } else if (this.currentItem >= this.options.slidesToScroll){
            this.gotoItem(this.currentItem - (this.items.length  - 2 * this.offset), false)
        }
    }

    onWindowResize () {
        let mobile = window.innerWidth < 800
        if(mobile !== this.isMobile) {
            this.isMobile = mobile
            this.setStyle()
            this.moveCallBacks.forEach(cb => cb(this.currentItem))
        }
    }

    onMove (cb) {
        this.moveCallBacks.push(cb)
    }

    createDivWithClass (className){
        let div = document.createElement('div')
        div.setAttribute('class', className)
        return div
    }

    get slidesToScroll() {
        return this.isMobile ? 1 : this.options.slidesToScroll

    }

    get slidesVisible() {
        return this.isMobile ? 1 : this.options.slidesVisible

    }
}

document.addEventListener('DOMContentLoaded', function(){

    new Carousel ( document.querySelector('#carousel'), {
        slidesVisible: 4,
        slidesToScroll: 1,
        infinite: true

    })
    new Carousel ( document.querySelector('#carousel2'), {
        slidesVisible: 4,
        slidesToScroll: 1,
        infinite: true

    })
    new Carousel ( document.querySelector('#carousel3'), {
        slidesVisible: 4,
        slidesToScroll: 1,
        infinite: true

    })
    new Carousel ( document.querySelector('#carousel4'), {
        slidesVisible: 4,
        slidesToScroll: 1,
        infinite: true

    })
    new Carousel ( document.querySelector('#carousel5'), {
        slidesVisible: 4,
        slidesToScroll: 1,
        infinite: true

    })

})
*/
