function adjustBookTitles() {
    const booksContainer = document.querySelector(".books-container");
    const books = Array.from(document.querySelectorAll(".book-card"));

    if (!booksContainer || books.length === 0) return;

    let rowHeight = 0;
    let rowBooks = [];
    let lastOffsetTop = books[0].offsetTop;

    books.forEach((book, index) => {
        const title = book.querySelector(".book-title");

        // Нулиране на височината, за да се измери правилно
        title.style.minHeight = "auto";

        // Проверка за нов ред
        if (book.offsetTop !== lastOffsetTop) {
            rowBooks.forEach(b => (b.querySelector(".book-title").style.minHeight = `${rowHeight}px`));
            rowBooks = [];
            rowHeight = 0;
            lastOffsetTop = book.offsetTop;
        }

        rowBooks.push(book);
        rowHeight = Math.max(rowHeight, title.offsetHeight);

        if (index === books.length - 1) {
            rowBooks.forEach(b => (b.querySelector(".book-title").style.minHeight = `${rowHeight}px`));
        }
    });
}

window.addEventListener("load", adjustBookTitles);
window.addEventListener("resize", adjustBookTitles);
