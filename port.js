document.addEventListener("DOMContentLoaded", function() {
    const sections = document.querySelectorAll("section");

    const revealSection = (entries, observer) => {
        const [entry] = entries;

        if (entry.isIntersecting) {
            entry.target.classList.add("visible");
            observer.unobserve(entry.target);
        }
    };

    const sectionObserver = new IntersectionObserver(revealSection, {
        root: null,
        threshold: 0.1,
    });

    sections.forEach((section) => {
        sectionObserver.observe(section);
    });
});
