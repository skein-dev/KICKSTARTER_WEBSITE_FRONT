function customSlider() {
    let active_info = document.querySelector(".about_text_active").getAttribute("id");
    if (active_info == "first_about_part") {
        document.getElementById(active_info).classList.remove("about_text_active");
        document.getElementById("second_about_part").classList.add("about_text_active");
    }
    if (active_info == "second_about_part") {
        document.getElementById(active_info).classList.remove("about_text_active");
        document.getElementById("first_about_part").classList.add("about_text_active");
    }
}
window.onload = function() {
    document.body.classList.add('loaded_hiding');
    window.setTimeout(function() {
        document.body.classList.add('loaded');
        document.body.classList.remove('loaded_hiding');
    }, 500);
}

function copylink() {
    let link_clipboard = document.getElementById("link");
    link_clipboard.select();
    document.execCommand("copy");
}

function copylink() {
    let link_clipboard = document.getElementById("link");
    link_clipboard.select();
    document.execCommand("copy");
}

function level1() {
    document.getElementById("level-row-2").classList.remove("row_level2_active");
    document.getElementById("level-row-3").classList.remove("row_level3_active");
    document.getElementById("level-row-4").classList.remove("row_level4_active");

    document.getElementById("level-2").classList.remove("row_level_stat_link_active");
    document.getElementById("level-3").classList.remove("row_level_stat_link_active");
    document.getElementById("level-4").classList.remove("row_level_stat_link_active");

    document.getElementById("level-1").classList.add("row_level_stat_link_active");
    document.getElementById("level-row-1").classList.add("row_level1_active");

    document.getElementById("table-1").classList.remove("d-none");
    document.getElementById("table-2").classList.add("d-none");
    document.getElementById("table-3").classList.add("d-none");
    document.getElementById("table-4").classList.add("d-none");
}

function level2() {
    document.getElementById("level-row-1").classList.remove("row_level1_active");
    document.getElementById("level-row-3").classList.remove("row_level3_active");
    document.getElementById("level-row-4").classList.remove("row_level4_active");

    document.getElementById("level-1").classList.remove("row_level_stat_link_active");
    document.getElementById("level-3").classList.remove("row_level_stat_link_active");
    document.getElementById("level-4").classList.remove("row_level_stat_link_active");

    document.getElementById("level-2").classList.add("row_level_stat_link_active");
    document.getElementById("level-row-2").classList.add("row_level2_active");

    document.getElementById("table-2").classList.remove("d-none");
    document.getElementById("table-1").classList.add("d-none");
    document.getElementById("table-3").classList.add("d-none");
    document.getElementById("table-4").classList.add("d-none");
}

function level3() {
    document.getElementById("level-row-2").classList.remove("row_level2_active");
    document.getElementById("level-row-1").classList.remove("row_level1_active");
    document.getElementById("level-row-4").classList.remove("row_level4_active");

    document.getElementById("level-2").classList.remove("row_level_stat_link_active");
    document.getElementById("level-1").classList.remove("row_level_stat_link_active");
    document.getElementById("level-4").classList.remove("row_level_stat_link_active");

    document.getElementById("level-3").classList.add("row_level_stat_link_active");
    document.getElementById("level-row-3").classList.add("row_level3_active");

    document.getElementById("table-3").classList.remove("d-none");
    document.getElementById("table-2").classList.add("d-none");
    document.getElementById("table-1").classList.add("d-none");
    document.getElementById("table-4").classList.add("d-none");
}

function level4() {
    document.getElementById("level-row-2").classList.remove("row_level2_active");
    document.getElementById("level-row-3").classList.remove("row_level3_active");
    document.getElementById("level-row-1").classList.remove("row_level1_active");

    document.getElementById("level-2").classList.remove("row_level_stat_link_active");
    document.getElementById("level-3").classList.remove("row_level_stat_link_active");
    document.getElementById("level-1").classList.remove("row_level_stat_link_active");

    document.getElementById("level-4").classList.add("row_level_stat_link_active");
    document.getElementById("level-row-4").classList.add("row_level4_active");

    document.getElementById("table-4").classList.remove("d-none");
    document.getElementById("table-2").classList.add("d-none");
    document.getElementById("table-3").classList.add("d-none");
    document.getElementById("table-1").classList.add("d-none");
}