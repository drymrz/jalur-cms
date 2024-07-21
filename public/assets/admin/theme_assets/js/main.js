/*-------------------------------------
  Template name:      Hexadash tailwind css
  Version:            1.0
  Author Name:        dashboardmarket
---------------------------------------*/

"use strict";

/* Preloader */
function preloader(param) {
    let preloader = document.querySelector(param);
    window.addEventListener("load", function () {
        if (preloader) {
            preloader.classList.add("show");
        }
    });
}

/* Search Dropdown trigger */
function toggleDropdown(selector, target) {
    const searchToggle = document.querySelector(selector);
    const searchFormTopMenu = document.querySelector(target);
    if (searchToggle) {
        searchToggle.addEventListener("click", function () {
            this.classList.toggle("close");
            searchFormTopMenu.classList.toggle("visible");
        });
    }
}

/* Dark Switch Button */
function enableDarkMode() {
    const isDarkModeEnabled = localStorage.getItem("darkMode") === "true";
    const darkModeToggle = document.querySelector(".dark-single-switch");
    const darkModeSwitch = document.querySelector("#darkModeToggle");
    const darkMode = document.querySelector("body");

    function setDarkMode(enabled) {
        if (enabled) {
            darkMode.classList.add("dark");
            localStorage.setItem("darkMode", "true");
            if (darkModeSwitch) {
                darkModeSwitch.checked = true;
            }
        } else {
            darkMode.classList.remove("dark");
            localStorage.setItem("darkMode", "false");
            if (darkModeSwitch) {
                darkModeSwitch.checked = false;
            }
        }
    }

    function toggleDarkMode() {
        const darkModeState = darkMode.classList.contains("dark");

        setDarkMode(!darkModeState);
        if (darkModeToggle) {
            darkModeToggle.classList.toggle("active", !darkModeState);
        }
    }

    setDarkMode(isDarkModeEnabled);

    if (darkModeToggle) {
        darkModeToggle.addEventListener("click", toggleDarkMode);
    }

    if (darkModeSwitch) {
        darkModeSwitch.addEventListener("change", toggleDarkMode);
    }
}

/* RTL LTR Switch */
function enableRtlMode() {
    const rtlToggle = document.getElementById("rtlToggle");

    if (rtlToggle) {
        function setDirection() {
            const isRtl = rtlToggle.checked;
            document.documentElement.dir = isRtl ? "rtl" : "ltr";
            localStorage.setItem("isRtl", isRtl); // Store the state
        }

        rtlToggle.addEventListener("change", setDirection);

        const isRtlStored = localStorage.getItem("isRtl");
        if (isRtlStored === "true") {
            rtlToggle.checked = true;
        } else {
            rtlToggle.checked = false;
        }

        setDirection();
    }
}

/* Top Menu Toggle */
function toggleTopMenu() {
    const topMenuToggle = document.getElementById("topMenuToggle");
    const target = document.getElementById("asideBar");
    const target2 = document.getElementById("navBar");
    const body = document.getElementById("content");
    const limToggler = document.getElementById("slim-toggler");
    const topMenuWrapper = document.getElementById("topMenuWrapper");
    const topMenuLogo = document.getElementById("topMenu-logo");
    if (
        topMenuToggle &&
        target &&
        body &&
        limToggler &&
        topMenuWrapper &&
        topMenuLogo
    ) {
        function setTopMenuStyle() {
            target.classList.toggle("TopCollapsed");
            target2.classList.toggle("TopCollapsed");
            body.classList.toggle("TopExpanded");
            limToggler.classList.toggle("hide", topMenuToggle.checked);
            topMenuWrapper.classList.toggle("flex", topMenuToggle.checked);
            topMenuWrapper.style.transition = topMenuToggle.checked
                ? "all 0.3s linear 0s"
                : "all 0.3s linear 0s";
            topMenuLogo.classList.toggle("flex", topMenuToggle.checked);
            topMenuLogo.style.transition = topMenuToggle.checked
                ? "all 0.3s linear 0s"
                : "all 0.3s linear 0s";
            // localStorage.setItem('isTopMenuChecked', topMenuToggle.checked);
        }

        topMenuToggle.addEventListener("change", setTopMenuStyle);
        // const isTopMenuChecked = localStorage.getItem('isTopMenuChecked');
        // if (isTopMenuChecked === 'true') {
        //   topMenuToggle.checked = true;
        //   setTopMenuStyle();
        // } else {
        //   topMenuToggle.checked = false;
        // }
    }
}

/* sidebar dropdown */
function handleSidebarDropdown() {
    let submenus = document.querySelectorAll("aside .sub-item-wrapper");
    let direction = document.querySelector("html").getAttribute("dir");
    submenus.forEach((item) => {
        item.addEventListener("mouseover", function () {
            let menuItem = this;
            let menuItemRect = menuItem.getBoundingClientRect();
            let submenuWrapper = menuItem.querySelector(".sub-item");
            submenuWrapper.style.top = `${menuItemRect.top}px`;
        });
    });
}

/* Password visibility */
function togglePasswordVisibility() {
    const passwordToggle = document.querySelector(".js-password-toggle");
    const passwords = document.querySelectorAll(".js-password");
    const passwordLabel = document.querySelector(".js-password-label i");

    if (passwordToggle) {
        passwordToggle.addEventListener("change", function () {
            passwords.forEach((password) => {
                if (password.type === "password") {
                    password.type = "text";
                    passwordLabel.classList.add("uil-eye");
                    passwordLabel.classList.remove("uil-eye-slash");
                } else {
                    password.type = "password";
                    passwordLabel.classList.remove("uil-eye");
                    passwordLabel.classList.add("uil-eye-slash");
                }

                password.focus();
            });
        });
    }
}

/* Redirect index page */
function redirectIndexPage(selector) {
    const form = document.getElementById(selector);
    if (form) {
        form.addEventListener("submit", function (e) {
            e.preventDefault();
            if (validateForm()) {
                window.location.href = "index.html";
            }
        });

        function validateForm() {
            const passwordField = document.getElementById("password");
            if (passwordField.value.trim() === "") {
                alert("Password is required.");
                return false;
            }
            return true;
        }
    }
}

/* Current Year */
function displayCurrentYear(selector) {
    const elements = document.querySelectorAll(selector);
    const currentYear = new Date().getFullYear();
    if (currentYear) {
        elements.forEach((element) => {
            element.innerHTML = currentYear;
        });
    }
}

/* Count days (plugin) */
function countRemainingDays() {
    var daysElement = document.querySelector("#countDays");
    var hoursElement = document.querySelector("#countHours");
    var minutesElement = document.querySelector("#countMinutes");
    var secondsElement = document.querySelector("#countSeconds");
    var containerElement = document.querySelector(".counting");
    var endDate = new Date().getFullYear() + 1 + "/01/01";

    if (containerElement) {
        var myCountDown = new ysCountDown(endDate, function (
            remaining,
            finished
        ) {
            if (finished) {
                containerElement.textContent = "Expired";
            }

            daysElement.textContent = remaining.totalDays;
            hoursElement.textContent = remaining.hours;
            minutesElement.textContent = remaining.minutes;
            secondsElement.textContent = remaining.seconds;
        });
    }
}

/* Blog details sticky social */
function makeSocialIconsSticky(selector) {
    var shareGroup = document.getElementById(selector);
    if (shareGroup) {
        if (window.scrollY <= 700) {
            shareGroup.classList.remove("show");
        } else {
            shareGroup.classList.add("show");
        }
    }
}

/* Slim Header */
function toggleSlimView() {
    const sidebarToggle = document.querySelector("#slim-toggler");
    const sidebar = document.querySelector("#asideBar");
    const navbar = document.querySelector("#navBar");
    const contents = document.querySelector("#content");
    const rightEllipsis = document.querySelector("#right-ellipsis");

    function toggleSidebar() {
        if (sidebar) {
            sidebar.classList.toggle("collapsed");
            navbar.classList.toggle("collapsed");
        }
        if (contents) {
            contents.classList.toggle("expanded");
        }
    }

    if (sidebarToggle) {
        sidebarToggle.addEventListener("click", function (e) {
            toggleSidebar();
        });
    }

    function toggleRightEllipsis() {
        if (rightEllipsis) {
            contents.classList.toggle("active");
        }
    }

    if (rightEllipsis) {
        rightEllipsis.addEventListener("click", function (e) {
            toggleRightEllipsis();
        });
    }

    document.addEventListener("click", function (e) {
        const target = e.target; // Clicked element
        if (
            window.innerWidth <= 1199 &&
            !sidebar.contains(target) &&
            !sidebarToggle.contains(target)
        ) {
            // Check if the sidebar or toggle button was not clicked
            if (sidebar.classList.contains("collapsed")) {
                // If sidebar is collapsed, remove the classes
                sidebar.classList.remove("collapsed");
                navbar.classList.remove("collapsed");
                if (contents) {
                    contents.classList.remove("expanded");
                }
            }
        }
    });
}

/* Sidebar Toggle ul */
function toggleSidebarFull() {
    document
        .querySelectorAll(".navBar .sub-item-wrapper > a")
        .forEach(function (element) {
            element.addEventListener("click", function (e) {
                e.preventDefault();
                var parent = this.parentNode;
                var siblingUl = parent.querySelector("ul");

                document
                    .querySelectorAll(".navBar .sub-item-wrapper")
                    .forEach(function (item) {
                        if (item !== parent) {
                            item.classList.remove("open");
                            item.querySelector("ul").style.display = "none";
                        }
                    });

                parent.classList.toggle("open");
                siblingUl.style.display = parent.classList.contains("open")
                    ? "block"
                    : "none";
            });
        });
}

/* Sidebar scroll sync menu item */
function highlightActiveMenuItem(selector, target) {
    var activeMenuItems = document.querySelectorAll(selector);
    var navBar = document.querySelector(target);

    if (activeMenuItems) {
        activeMenuItems.forEach(function (menuItem) {
            var rect = menuItem.getBoundingClientRect();
            var topValue = rect.top;

            function scrollWin(topValue) {
                if (navBar) {
                    var scrollPosition = topValue - 300;
                    navBar.scrollTop = scrollPosition;
                }
            }

            window.onload = function () {
                scrollWin(topValue);
            };
        });
    }
}

/* list Item active class */
function highlightActiveListItem(selector, toggleClass) {
    const links = document.querySelectorAll(selector);

    links.forEach((link) => {
        link.addEventListener("click", function () {
            links.forEach((e) => {
                e.classList.remove(toggleClass);
            });
            this.classList.add(toggleClass);
        });
    });
}

/* Inbox utility */
function handleInboxStars(target) {
    //toggle star
    const toggleStars = document.querySelectorAll(target);
    toggleStars.forEach((toggleStar) => {
        toggleStar.addEventListener("click", function () {
            if (toggleStar.classList.contains("active")) {
                toggleStar.classList.remove("active");
            } else {
                toggleStar.classList.add("active");
            }
        });
    });

    /* Add Label */
    function addNewLabel() {
        const labelName = document.getElementById("newLabelInput").value;
        if (labelName) {
            const listItem = document.createElement("li");
            const anchor = document.createElement("a");
            anchor.href = "#";
            anchor.className =
                "font-normal text-[15px] relative flex items-center bg-transparent text-body dark:text-subtitle-dark px-[15px] py-[10px] gap-[15px] rounded-md capitalize hover-bg-primary/10 hover-text-primary";
            anchor.innerHTML = `
                <i class="uil uil-list-ul"></i>
                ${labelName}
            `;
            listItem.appendChild(anchor);
            const labelList = document.getElementById("label-list");
            labelList.appendChild(listItem);
            document.getElementById("newLabelInput").value = ""; // Clear the input field
        }
    }
    const addLabelButton = document.getElementById("addLabelButton");
    if (addLabelButton) {
        addLabelButton.addEventListener("click", addNewLabel);
    }
}

/* Show and Hide Div */
function toggleEmailOverlay(a, b) {
    const replyResult = document.querySelector(a);
    if (replyResult) {
        replyResult.addEventListener("click", function () {
            var div = document.querySelector(b);
            if (div.classList.contains("hidden")) {
                div.classList.remove("hidden");
                div.classList.add("visible");
                replyResult.classList.add("active");
            } else {
                replyResult.classList.remove("active");
                div.classList.remove("visible");
                div.classList.add("hidden");
            }
        });
    }
}

/* Editor inbox (Plugin) */
function manageEditor(param) {
    const selector = document.querySelector(param);

    if (selector) {
        var quill = new Quill(param, {
            theme: "snow",
            placeholder: "Type Your message...",
        });
    }
}

/* Remove free api console warning */
function consoleErrorRemove(param) {
    const auxElements = document.querySelectorAll(param);
    auxElements.forEach(function (auxElement) {
        auxElement.style.display = "none";
    });
}

/* Toggle Class */
function adjustWindowMode(selector, targetSelector, toggleClass) {
    const myButtons = document.querySelectorAll(selector);
    const targetDiv = document.querySelector(targetSelector);

    if (myButtons && targetDiv) {
        myButtons.forEach((myButton) => {
            myButton.addEventListener("click", () => {
                targetDiv.classList.toggle(toggleClass);
            });
        });
    }
}

/* Checkbox Group Toggle */
function toggleCheckboxGroup(target) {
    const checkboxes = document.querySelectorAll(target);
    checkboxes.forEach((checkbox) => {
        checkbox.addEventListener("click", function () {
            if (this.checked) {
                checkboxes.forEach((otherCheckbox) => {
                    if (otherCheckbox !== this) {
                        otherCheckbox.checked = false;
                    }
                });
            }
        });
    });
}

/* DateRangePicker (plugin) */
function initializeDateRangePicker(target) {
    const elem = document.getElementById(target);
    if (elem) {
        const rangepicker = new initializeDateRangePicker(elem, {});
    }
}

/* Datepicker (plugin) */
function initializeDatepicker(target) {
    const elem = document.getElementById(target);
    if (elem) {
        const datepicker = new Datepicker(elem, {
            nextArrow: '<i class="uil uil-angle-right-b"></i>',
            prevArrow: '<i class="uil uil-angle-left-b"></i>',
        });
    }
}

/* Number counter */
function updateNumberCounter(selector, target, duration) {
    let startTime;
    const countElements = document.querySelectorAll(selector);

    countElements.forEach(function (element) {
        const countNumberElement = element.querySelector(target);
        const maxNumber = parseInt(element.getAttribute("data-number"), 10);
        let currentNumber = 0;

        function updateNumber() {
            if (!startTime) {
                startTime = Date.now();
            }

            const elapsed = Date.now() - startTime;
            if (elapsed > duration) return;

            duration -= elapsed;

            if (currentNumber >= maxNumber) {
                countNumberElement.textContent = maxNumber.toLocaleString();
            } else {
                currentNumber += 1;
                countNumberElement.textContent = currentNumber.toLocaleString();
            }

            if (currentNumber < maxNumber) {
                setTimeout(updateNumber, 1);
            }

            if (duration <= 0) {
                startTime = null;
                duration = 200;
            }
        }

        updateNumber();
    });
}

/* svgMap (plugin) */
function setupSvgMap(target) {
    const mapSelector = document.getElementById(target);
    if (mapSelector) {
        new svgMap({
            targetElementID: target,
            initialZoom: 1.06,
            initialPan: {
                x: 30,
                y: 60,
            },
            flagType: "emoji",
            colorMax: "#DBE1E8",
            colorMin: "#DBE1E8",
            colorNoData: "#DBE1E8",
            data: window.mapData,
        });
    }
}

/* svgMap Button Custom Icon Pushed */
function addZoomFunctionality(buttonSelector, iconClass) {
    const zoomButton = document.querySelector(buttonSelector);

    if (zoomButton) {
        const zoomIcon = document.createElement("i");
        zoomIcon.classList.add("uil", iconClass);
        zoomButton.appendChild(zoomIcon);
    }
}

/* Check All Group */
function manageCheckboxGroups(checkAllId, target) {
    const checkboxes = document.querySelectorAll(target);
    const checkAll = document.getElementById(checkAllId);

    if (checkboxes && checkAll) {
        checkboxes.forEach((checkbox) => {
            checkbox.addEventListener("change", function () {
                const checkedCount = document.querySelectorAll(
                    `${target}:checked`
                ).length;

                checkAll.checked = checkedCount > 0;
                checkAll.indeterminate =
                    checkedCount > 0 && checkedCount < checkboxes.length;
            });
        });

        checkAll.addEventListener("change", function () {
            checkboxes.forEach((checkbox) => {
                checkbox.checked = this.checked;
            });
        });
    }
}

/* Indeterminate checkbox  */
function setIndeterminateCheckboxState(target) {
    const checkbox = document.getElementById(target);
    if (checkbox) {
        checkbox.indeterminate = true;
    }
}

/* Checked Or Disabled */
function handleCheckedOrDisabled() {
    function toggleCheckbox(button) {
        const checkbox = button.parentElement.parentElement.querySelector(
            "#checkboxOrDisabled"
        );
        if (checkbox) {
            checkbox.checked = !checkbox.checked;
            button.textContent = checkbox.checked ? "Uncheck" : "Check";
        }
    }

    function toggleDisabled(button) {
        const customCheckbox = button.parentElement.parentElement.querySelector(
            "#checkboxOrDisabled"
        );
        if (customCheckbox) {
            customCheckbox.disabled = !customCheckbox.disabled;
            customCheckbox.classList.toggle("disabled");
            button.textContent = customCheckbox.classList.contains("disabled")
                ? "Enable"
                : "Disable";
        }
    }

    const checkToggleButtons = document.querySelectorAll(".btn-checkToggle");
    const activeToggleButtons = document.querySelectorAll(".btn-activeToggle");

    checkToggleButtons.forEach((button) => {
        button.addEventListener("click", function () {
            toggleCheckbox(button);
        });
    });

    activeToggleButtons.forEach((button) => {
        button.addEventListener("click", function () {
            toggleDisabled(button);
        });
    });
}

/* Gallery Filter (plugin) */
function filterGalleryItems(target) {
    var containerEl = document.querySelector(target);
    if (containerEl) {
        var mixer = mixitup(containerEl);
    }
}

/* Unicons (library) */
function manageIconsUni(target, data) {
    const xhr = new XMLHttpRequest();
    const selector = document.querySelector(target);
    xhr.open(
        "GET",
        typeof env !== "undefined" && env.iconLoaderUrl
            ? env.iconLoaderUrl
            : data,
        true
    );
    if (selector) {
        xhr.onreadystatechange = function () {
            if (xhr.readyState === 4 && xhr.status === 200) {
                const data = JSON.parse(xhr.responseText);
                const uniIcons = data.uniCons;

                const colUni = uniIcons
                    .map(
                        (icon) =>
                            `
          <div class="col-span-12 2xl:col-span-3 sm:col-span-6 lg:col-span-4">
           <div class="flex items-center gap-[5px]">
            <i class="text-[20px] text-body dark:text-subtitle-dark uil uil-${icon}"></i>
            <span class="text-body dark:text-subtitle-dark text-[16px]">${icon}</span>
           </div>
          </div>
          `
                    )
                    .join("");

                selector.innerHTML = colUni;
            }
        };
        xhr.send();
    }
}

function manageIconsLine(target, data) {
    const xhr = new XMLHttpRequest();
    const selector = document.querySelector(target);
    xhr.open(
        "GET",
        typeof env !== "undefined" && env.iconLoaderUrl
            ? env.iconLoaderUrl
            : data,
        true
    );
    if (selector) {
        xhr.onreadystatechange = function () {
            if (xhr.readyState === 4 && xhr.status === 200) {
                const data = JSON.parse(xhr.responseText);
                const LineIcons = data.laIcons;
                const colLine = LineIcons.map(
                    (icon) =>
                        `
          <div class="col-span-12 2xl:col-span-3 sm:col-span-6 lg:col-span-4">
           <div class="flex items-center gap-[5px]">
            <i class="text-[20px] text-body dark:text-subtitle-dark laIcon-list-box la la-${icon}"></i>
            <span class="text-body dark:text-subtitle-dark text-[16px]">${icon}</span>
           </div>
          </div>
          `
                ).join("");
                selector.innerHTML = colLine;
            }
        };
        xhr.send();
    }
}

/* Randomly increase and decrease number */
function updateRandomNumber(target, increase, decrease) {
    const badgeNumber = document.getElementById(target);
    const increaseButton = document.getElementById(increase);
    const decreaseButton = document.getElementById(decrease);

    if (badgeNumber && increaseButton && decreaseButton) {
        increaseButton.addEventListener("click", () => {
            const currentNumber = parseInt(
                badgeNumber.getAttribute("data-number")
            );
            badgeNumber.setAttribute("data-number", currentNumber + 1);
            badgeNumber.textContent = currentNumber + 1;
        });

        decreaseButton.addEventListener("click", () => {
            const currentNumber = parseInt(
                badgeNumber.getAttribute("data-number")
            );
            if (currentNumber > 0) {
                badgeNumber.setAttribute("data-number", currentNumber - 1);
                badgeNumber.textContent = currentNumber - 1;
            }
        });
    }
}

/* Switch toggle class */
function toggleSwitch(selector, target, class1) {
    const switchSelector = document.getElementById(selector);
    const switchOn = document.getElementById(target);

    if (switchSelector && switchOn) {
        function applyToggleClass() {
            if (switchSelector.checked) {
                switchOn.classList.add(class1);
            } else {
                switchOn.classList.remove(class1);
            }
        }
        switchSelector.addEventListener("change", applyToggleClass);
    }
}

/* Outside Toggle Class */
function toggleClassOutsideClick(target, selector, toggleClass) {
    var button = document.getElementById(target);
    var ul = document.getElementById(selector);

    if (button) {
        button.addEventListener("click", function () {
            ul.classList.toggle(toggleClass);
            button.classList.toggle("active");
        });

        document.addEventListener("click", function (event) {
            var isClickInsideButton = button.contains(event.target);
            var isClickInsideUl = ul.contains(event.target);

            if (!isClickInsideButton && !isClickInsideUl) {
                ul.classList.remove(toggleClass);
                button.classList.remove("active");
            }
        });
    }
}

/* Inline SVG */
function insertInlineSvg(selector) {
    const svg = document.querySelectorAll(selector);
    if (svg) {
        svg.forEach(function (element) {
            var imgID = element.id;
            var imgClass = element.className;
            var imgURL = element.src;

            fetch(imgURL)
                .then((response) => response.text())
                .then(function (data) {
                    var parser = new DOMParser();
                    var xmlDoc = parser.parseFromString(data, "image/svg+xml");
                    var $svg = xmlDoc.getElementsByTagName("svg")[0];

                    if (typeof imgID !== "undefined" && imgID !== "") {
                        $svg.setAttribute("id", imgID);
                    }

                    if (typeof imgClass !== "undefined" && imgClass !== "") {
                        $svg.setAttribute("class", imgClass + " replaced-svg");
                    }

                    $svg.removeAttribute("xmlns:a");
                    element.parentNode.replaceChild($svg, element);
                });
        });
    }
}

/* Upcoming Events (Demo 5) */
function manageUpcomingEvents(editTarget, editSelector, removeSelector) {
    function handleEditEventTitleClick() {
        var eventTitleElement = this.closest("tr").querySelector(editTarget);
        if (eventTitleElement) {
            eventTitleElement.contentEditable = true;
            eventTitleElement.focus();
        }
    }

    function handleRemoveEventWrapperClick() {
        var eventWrapperElement = this.closest("tr");
        if (eventWrapperElement) {
            eventWrapperElement.parentNode.removeChild(eventWrapperElement);
        }
    }

    if (editSelector) {
        document.querySelectorAll(editSelector).forEach(function (button) {
            button.addEventListener("click", handleEditEventTitleClick);
        });
    }
    if (removeSelector) {
        document.querySelectorAll(removeSelector).forEach(function (button) {
            button.addEventListener("click", handleRemoveEventWrapperClick);
        });
    }
}

/* Add Download button */
function enableDownload(target) {
    const links = document.querySelectorAll(target);

    function init() {
        for (let i = 0; i < links.length; i++) {
            links[i].addEventListener(
                "click",
                function (e) {
                    e.preventDefault();
                    const attribute = this.getAttribute("href");
                    window.forceFileDL(attribute);
                },
                false
            );
        }
    }

    window.forceFileDL = function (sUrl) {
        if (/(iP)/g.test(navigator.userAgent)) {
            window.open(sUrl, "_blank");
            return false;
        }

        if (window.forceFileDL.isChrome || window.forceFileDL.isSafari) {
            const link = document.createElement("a");
            link.href = sUrl;
            link.setAttribute("target", "_blank");

            if (link.download !== undefined) {
                link.download = sUrl.substring(sUrl.lastIndexOf("/") + 1);
            }

            if (document.createEvent) {
                const event = new MouseEvent("click", {
                    bubbles: true,
                    cancelable: true,
                });
                link.dispatchEvent(event);
                return true;
            }
        }

        if (sUrl.indexOf("?") === -1) {
            sUrl += "?download";
        }

        window.open(sUrl, "_blank");
        return true;
    };

    window.forceFileDL.isChrome =
        navigator.userAgent.toLowerCase().indexOf("chrome") > -1;
    window.forceFileDL.isSafari =
        navigator.userAgent.toLowerCase().indexOf("safari") > -1;

    return {
        init: init,
    };
}

/* Placeholder image */
function placeholderImage(target, placeholderPath) {
    function imageExists(url, callback) {
        var img = new Image();
        img.onload = function () {
            callback(true);
        };
        img.onerror = function () {
            callback(false);
        };
        img.src = url;
    }
    var imageElements = document.querySelectorAll(target);
    if (imageElements) {
        imageElements.forEach(function (imageElement) {
            imageExists(imageElement.src, function (exists) {
                if (!exists) {
                    imageElement.src = placeholderPath;
                    imageElement.alt = "Placeholder Image";
                }
            });
        });
    }
}

/* Profile Uploader */
function imageUpload(target, selector, localStorageKey) {
    const profileImage = document.getElementById(target);
    const fileInput = document.getElementById(selector);

    if (profileImage && fileInput) {
        const savedImage = localStorage.getItem(localStorageKey);
        if (savedImage) {
            profileImage.src = savedImage;
        }

        fileInput.addEventListener("change", function (event) {
            const file = event.target.files[0];

            if (file) {
                const reader = new FileReader();

                reader.onload = function (e) {
                    profileImage.src = e.target.result;
                    localStorage.setItem(localStorageKey, e.target.result);
                };

                reader.readAsDataURL(file);
            }
        });
    }
}

/* Social Post */
function socialPost() {
    const postForm = document.querySelector(".post-highlight");
    const postInput = document.querySelector(".post-something");
    const clearButton = document.querySelector(".profile-post-clear");
    const overlayDark = document.createElement("div");

    overlayDark.classList.add("overlay-dark");

    function highlightForm(e) {
        e.preventDefault();
        document.body.appendChild(overlayDark);
        overlayDark.style.opacity = "1";
        overlayDark.style.visibility = "visible";
        document.body.style.position = "relative";
        setTimeout(function () {
            postForm.classList.add("highlight");
        }, 50);
    }

    if (postForm && postInput) {
        postInput.addEventListener("click", highlightForm);
    }

    if (clearButton && postInput) {
        clearButton.addEventListener("click", function () {
            postInput.value = "";
        });
    }

    function highlightRemoveForm(e) {
        if (
            !e.target.closest(".post-highlight") &&
            postForm.classList.contains("highlight")
        ) {
            document.body.removeChild(overlayDark);
            overlayDark.style.opacity = "0";
            overlayDark.style.visibility = "hidden";
            document.body.removeAttribute("style");
            postForm.classList.remove("highlight");
        }
    }

    if (postForm !== null) {
        document.body.addEventListener("click", highlightRemoveForm);
    }
}

/* Custom tab */
function customTab(nav, buttons, panels) {
    const tab = document.querySelector(nav);

    if (tab) {
        const tabButtons = tab.querySelectorAll(buttons);
        const tabPanels = Array.from(tab.querySelectorAll(panels));

        function tabClickHandler(e) {
            const selectedTabId = e.currentTarget.id;

            localStorage.setItem("selectedTab", selectedTabId);

            tabPanels.forEach((panel) => {
                panel.hidden = true;
                panel.classList.add("hidden");
            });

            tabButtons.forEach((button) => {
                button.setAttribute("aria-selected", "false");
                button.classList.remove("active");
            });

            e.currentTarget.setAttribute("aria-selected", "true");
            e.currentTarget.classList.add("active");

            const { id } = e.currentTarget;

            const currentTab = tabPanels.find(
                (panel) => panel.getAttribute("aria-labelledby") === id
            );

            currentTab.hidden = false;
            currentTab.classList.remove("hidden");
        }

        tabButtons.forEach((button) => {
            button.addEventListener("click", tabClickHandler);
        });

        const selectedTabId = localStorage.getItem("selectedTab");
        if (selectedTabId) {
            const selectedTab = document.getElementById(selectedTabId);
            if (selectedTab) {
                selectedTab.click();
            }
        }
    }
}

/* Follow Buttons */
function followButtons(selector, toggleClass, defaultText, replaceText) {
    const followButtons = document.querySelectorAll(selector);

    followButtons.forEach((button) => {
        button.addEventListener("click", function () {
            button.classList.toggle(toggleClass);
            updateButtonState(button);
        });
    });

    function updateButtonState(button) {
        const isFollowed = button.classList.contains(toggleClass);
        const buttonText = isFollowed ? replaceText : defaultText;
        const icon = button.querySelector("i");
        icon.classList.toggle("hidden", !isFollowed);
        button.querySelector("span").innerText = buttonText;

        const buttonId = button.id;
        localStorage.setItem(buttonId, isFollowed);
    }

    followButtons.forEach((button) => {
        const buttonId = button.id;
        const isFollowed = localStorage.getItem(buttonId) === "true";
        if (isFollowed) {
            button.classList.add(toggleClass);
            updateButtonState(button);
        }
    });
}

/* Switch checkbox group */
function switchGroup(selector, target) {
    const switchSelector = document.querySelectorAll(selector);
    if (switchSelector) {
        switchSelector.forEach((button) => {
            button.addEventListener("click", toggleCheckboxes);
        });

        function toggleCheckboxes() {
            var checkboxes = document.querySelectorAll(target);

            var isAnyUnchecked = Array.from(checkboxes).some(
                (checkbox) => !checkbox.checked
            );

            checkboxes.forEach((checkbox) => {
                checkbox.checked = isAnyUnchecked;
            });
        }
    }
}

/* Price range with values (Plugin) */
function multiPriceRange(selector) {
    var paddingSlider = document.getElementById(selector);

    if (paddingSlider) {
        noUiSlider.create(paddingSlider, {
            start: [0, 1500],
            connect: true,
            behaviour: "drag",
            range: {
                min: 0,
                max: 3000,
            },
        });
        var paddingMin = document.getElementById("slider-padding-value-min");
        var paddingMax = document.getElementById("slider-padding-value-max");

        paddingSlider.noUiSlider.on("update", function (values, handle) {
            if (handle) {
                paddingMax.innerHTML = `$${values[handle]}`;
            } else {
                paddingMin.innerHTML = `$${values[handle]}`;
            }
        });
    }
}

/* Product Items control */
function setupProductCount(
    wrapperSelector,
    totalNumberSelector,
    downSelector,
    upSelector,
    separation
) {
    let productContainer = document.querySelector(wrapperSelector);

    if (productContainer) {
        let decrementBtns = productContainer.querySelectorAll(downSelector);
        let incrementBtns = productContainer.querySelectorAll(upSelector);

        if (decrementBtns.length > 0 && incrementBtns.length > 0) {
            let intervalIds = new Map();

            decrementBtns.forEach((decrementBtn) => {
                decrementBtn.addEventListener("mousedown", startDecrement);
                decrementBtn.addEventListener("mouseup", stopInterval);
                decrementBtn.addEventListener("mouseleave", stopInterval);
            });

            incrementBtns.forEach((incrementBtn) => {
                incrementBtn.addEventListener("mousedown", startIncrement);
                incrementBtn.addEventListener("mouseup", stopInterval);
                incrementBtn.addEventListener("mouseleave", stopInterval);
            });

            function startDecrement() {
                let row = this.closest(separation);
                if (row) {
                    decrement(row);
                    intervalIds.set(
                        row,
                        setInterval(() => decrement(row), 200)
                    );
                }
            }

            function startIncrement() {
                let row = this.closest(separation);
                if (row) {
                    increment(row);
                    intervalIds.set(
                        row,
                        setInterval(() => increment(row), 200)
                    );
                }
            }

            function stopInterval() {
                let row = this.closest(separation);
                if (row) {
                    clearInterval(intervalIds.get(row));
                }
            }

            function increment(row) {
                let numberInput = row.querySelector(totalNumberSelector);
                let currentValue = parseInt(numberInput.value, 10);
                numberInput.value = currentValue + 1;
            }

            function decrement(row) {
                let numberInput = row.querySelector(totalNumberSelector);
                let currentValue = parseInt(numberInput.value, 10);
                if (currentValue > 0) {
                    numberInput.value = currentValue - 1;
                }
            }
        }
    }
}

/* Image zoom in hover */
function zoomHover(selector) {
    const Default = {
        initialZoom: 3,
        minZoom: 1.25,
        maxZoom: 4,
        zoomSpeed: 0.01,
    };
    class Zoomable {
        constructor(element, config) {
            this.element = element;
            this.config = this._mergeConfig(config);

            const { initialZoom, minZoom, maxZoom } = this.config;

            this.zoomed = false;
            this.initialZoom = Math.max(
                Math.min(initialZoom, maxZoom),
                minZoom
            );
            this.zoom = this.initialZoom;

            this.img = element.querySelector(".zoomable__img");
            this.img.draggable = false;
            this.element.style.setProperty("--zoom", this.initialZoom);

            this._addEventListeners();
        }

        static get Default() {
            return Default;
        }

        _addEventListeners() {
            this.element.addEventListener("mouseover", () =>
                this._handleMouseover()
            );
            this.element.addEventListener("mousemove", (evt) =>
                this._handleMousemove(evt)
            );
            this.element.addEventListener("mouseout", () =>
                this._handleMouseout()
            );
            this.element.addEventListener("wheel", (evt) =>
                this._handleWheel(evt)
            );

            this.element.addEventListener("touchstart", (evt) =>
                this._handleTouchstart(evt)
            );
            this.element.addEventListener("touchmove", (evt) =>
                this._handleTouchmove(evt)
            );
            this.element.addEventListener("touchend", () =>
                this._handleTouchend()
            );
        }

        _handleMouseover() {
            if (this.zoomed) {
                return;
            }

            this.element.classList.add("zoomable--zoomed");

            this.zoomed = true;
        }

        _handleMousemove(evt) {
            if (!this.zoomed) {
                return;
            }

            const elPos = this.element.getBoundingClientRect();

            const percentageX = `${
                ((evt.clientX - elPos.left) * 100) / elPos.width
            }%`;
            const percentageY = `${
                ((evt.clientY - elPos.top) * 100) / elPos.height
            }%`;

            this.element.style.setProperty("--zoom-pos-x", percentageX);
            this.element.style.setProperty("--zoom-pos-y", percentageY);
        }

        _handleMouseout() {
            if (!this.zoomed) {
                return;
            }

            this.element.style.setProperty("--zoom", this.initialZoom);
            this.element.classList.remove("zoomable--zoomed");

            this.zoomed = false;
        }

        _handleWheel(evt) {
            if (!this.zoomed) {
                return;
            }

            evt.preventDefault();

            const newZoom =
                this.zoom + evt.deltaY * (this.config.zoomSpeed * -1);
            const { minZoom, maxZoom } = this.config;

            this.zoom = Math.max(Math.min(newZoom, maxZoom), minZoom);
            this.element.style.setProperty("--zoom", this.zoom);
        }

        _handleTouchstart(evt) {
            evt.preventDefault();

            this._handleMouseover();
        }

        _handleTouchmove(evt) {
            if (!this.zoomed) {
                return;
            }

            const elPos = this.element.getBoundingClientRect();

            let percentageX =
                ((evt.touches[0].clientX - elPos.left) * 100) / elPos.width;
            let percentageY =
                ((evt.touches[0].clientY - elPos.top) * 100) / elPos.height;

            percentageX = Math.max(Math.min(percentageX, 100), 0);
            percentageY = Math.max(Math.min(percentageY, 100), 0);

            this.element.style.setProperty("--zoom-pos-x", `${percentageX}%`);
            this.element.style.setProperty("--zoom-pos-y", `${percentageY}%`);
        }

        _handleTouchend(evt) {
            this._handleMouseout();
        }

        _mergeConfig(config) {
            return {
                ...this.constructor.Default,
                ...(typeof config === "object" ? config : {}),
            };
        }
    }
    const zoomables = document.querySelectorAll(selector);
    for (const el of zoomables) {
        new Zoomable(el);
    }
}

/* Table drag and drop */
function tableDragAndDrop(selector) {
    var table = document.getElementById(selector);
    if (table) {
        var rows = table.rows;
        var dragSrcEl = null;

        for (var i = 0; i < rows.length; i++) {
            var row = rows[i];
            row.draggable = true;

            row.addEventListener("dragstart", function (e) {
                dragSrcEl = this;
                e.dataTransfer.effectAllowed = "move";
                e.dataTransfer.setData("text/html", this.outerHTML);
                this.classList.add("bg-regular");
            });

            row.addEventListener("dragend", function (e) {
                this.classList.remove("bg-regular");
                table
                    .querySelectorAll(".border-t-2", ".border-primary/30")
                    .forEach(function (el) {
                        el.classList.remove("border-t-2", "border-primary/30");
                    });
            });

            row.addEventListener("dragover", function (e) {
                e.preventDefault();
                this.classList.add("border-t-2", "border-primary/30");
            });

            row.addEventListener("dragenter", function (e) {
                e.preventDefault();
                this.classList.add("border-t-2", "border-primary/30");
            });

            row.addEventListener("dragleave", function (e) {
                this.classList.remove("border-t-2", "border-primary/30");
            });

            row.addEventListener("drop", function (e) {
                e.preventDefault();
                if (dragSrcEl != this) {
                    var sourceIndex = dragSrcEl.rowIndex;
                    var targetIndex = this.rowIndex;
                    if (sourceIndex < targetIndex) {
                        table.tBodies[0].insertBefore(
                            dragSrcEl,
                            this.nextSibling
                        );
                    } else {
                        table.tBodies[0].insertBefore(dragSrcEl, this);
                    }
                }
                table
                    .querySelectorAll(".border-t-2", ".border-primary/30")
                    .forEach(function (el) {
                        el.classList.remove("border-t-2", "border-primary/30");
                    });
            });
        }
    }
}

/* Invoice page */
function invoice() {
    const printBtn = document.querySelector(".print-btn");
    const invoiceBtn = document.querySelector(".invoice-btn");
    const downloadBtn = document.querySelector(".download-btn");
    if (printBtn || invoiceBtn || downloadBtn) {
        printBtn.addEventListener("click", handlePrint);
        invoiceBtn.addEventListener("click", generateInvoice);
        downloadBtn.addEventListener("click", handleDownload);

        function handlePrint() {
            window.print();
        }

        function generateInvoice() {
            console.log("Generating Invoice...");
            alert("Invoice generated!");
        }

        function handleDownload() {
            console.log("Downloading...");
            setTimeout(() => {
                const pdfBlob = new Blob([document.documentElement.outerHTML], {
                    type: "application/pdf",
                });
                const url = URL.createObjectURL(pdfBlob);
                const a = document.createElement("a");
                a.href = url;
                a.download = "document.pdf";
                document.body.appendChild(a);
                a.click();
                document.body.removeChild(a);
                URL.revokeObjectURL(url);
            }, 1000);
        }
    }
}

//selectable table (Plugin - tailwind element)
function selectable() {
    const datatable = document.getElementById("datatable-selectable");
    if (datatable) {
        console.log("founded");
        const data = {
            columns: [
                {
                    label: "Name",
                    field: "name",
                },
                {
                    label: "Position",
                    field: "position",
                },
                {
                    label: "Office",
                    field: "office",
                },
                {
                    label: "Age",
                    field: "age",
                },
                {
                    label: "Start date",
                    field: "date",
                },
                {
                    label: "Salary",
                    field: "salary",
                },
            ],
            rows: [
                {
                    name: "Tiger Nixon",
                    position: "System Architect",
                    office: "Edinburgh",
                    age: 61,
                    date: "2011/04/25",
                    salary: "$320,800",
                },
                {
                    name: "Garrett Winters",
                    position: "Accountant",
                    office: "Tokyo",
                    age: 63,
                    date: "2011/07/25",
                    salary: "$170,750",
                },
                {
                    name: "Ashton Cox",
                    position: "Junior Technical Author",
                    office: "San Francisco",
                    age: 66,
                    date: "2009/01/12",
                    salary: "$86,000",
                },
                {
                    name: "Cedric Kelly",
                    position: "Senior Javascript Developer",
                    office: "Edinburgh",
                    age: 22,
                    date: "2012/03/29",
                    salary: "$433,060",
                },
                {
                    name: "Airi Satou",
                    position: "Accountant",
                    office: "Tokyo",
                    age: 33,
                    date: "2008/11/28",
                    salary: "$162,700",
                },
                {
                    name: "Brielle Williamson",
                    position: "Integration Specialist",
                    office: "New York",
                    age: 61,
                    date: "2012/12/02",
                    salary: "$372,000",
                },
                {
                    name: "Herrod Chandler",
                    position: "Sales Assistant",
                    office: "San Francisco",
                    age: 59,
                    date: "2012/08/06",
                    salary: "$137,500",
                },
                {
                    name: "Rhona Davidson",
                    position: "Integration Specialist",
                    office: "Tokyo",
                    age: 55,
                    date: "2010/10/14",
                    salary: "$327,900",
                },
                {
                    name: "Colleen Hurst",
                    position: "Javascript Developer",
                    office: "San Francisco",
                    age: 39,
                    date: "2009/09/15",
                    salary: "$205,500",
                },
                {
                    name: "Sonya Frost",
                    position: "Software Engineer",
                    office: "Edinburgh",
                    age: 23,
                    date: "2008/12/13",
                    salary: "$103,600",
                },
                {
                    name: "Jena Gaines",
                    position: "Office Manager",
                    office: "London",
                    age: 30,
                    date: "2008/12/19",
                    salary: "$90,560",
                },
                {
                    name: "Quinn Flynn",
                    position: "Support Lead",
                    office: "Edinburgh",
                    age: 22,
                    date: "2013/03/03",
                    salary: "$342,000",
                },
                {
                    name: "Charde Marshall",
                    position: "Regional Director",
                    office: "San Francisco",
                    age: 36,
                    date: "2008/10/16",
                    salary: "$470,600",
                },
                {
                    name: "Haley Kennedy",
                    position: "Senior Marketing Designer",
                    office: "London",
                    age: 43,
                    date: "2012/12/18",
                    salary: "$313,500",
                },
            ],
        };

        new te.Datatable(datatable, data);

        datatable.addEventListener("selectRows.te.datatable", (e) => {
            console.log(e.selectedRows, e.selectedIndexes, e.allSelected);
        });
    }
}

function rainColorSwitch() {
    const inputs = document.querySelectorAll(".controls input");

    function handleUpdate() {
        const suffix = this.dataset.sizing || "";
        document.documentElement.style.setProperty(
            `--${this.id}`,
            this.value + suffix
        );
    }

    inputs.forEach((input) => {
        input.addEventListener("input", handleUpdate);

        // Get initial color values in RGB format
        const initialColor = getComputedStyle(document.documentElement)
            .getPropertyValue(`--${input.id}`)
            .trim();
        const rgbValues = hexToRgb(initialColor);

        if (rgbValues) {
            input.value = `rgb(${rgbValues.join(", ")})`;
        }

        // Set initial values
        document.documentElement.style.setProperty(
            `--${input.id}`,
            input.value
        );
    });

    // Function to convert hex color to RGB
    function hexToRgb(hex) {
        const shorthandRegex = /^#?([a-f\d])([a-f\d])([a-f\d])$/i;
        hex = hex.replace(
            shorthandRegex,
            (m, r, g, b) => r + r + g + g + b + b
        );
        const result = /^#?([a-f\d]{2})([a-f\d]{2})([a-f\d]{2})$/i.exec(hex);
        return result
            ? [
                  parseInt(result[1], 16),
                  parseInt(result[2], 16),
                  parseInt(result[3], 16),
              ]
            : null;
    }
}

function content_ready_scripts() {
    preloader(".preloader");
    toggleDropdown(".theme-dropdown-trigger", ".theme-dropdown");
    enableDarkMode();
    enableRtlMode();
    toggleTopMenu();
    handleSidebarDropdown();
    togglePasswordVisibility();
    redirectIndexPage("admin-form");
    displayCurrentYear(".current-year");
    countRemainingDays();
    makeSocialIconsSticky("sticky-social");
    toggleSlimView();
    toggleSidebarFull();
    highlightActiveMenuItem(".navBar li.open", ".navBar");
    highlightActiveListItem(".listItemActive li a", "active");
    handleInboxStars(".inboxToggleStar");
    toggleEmailOverlay(".user-reply-1", ".user-reply-1-result");
    toggleEmailOverlay(".user-reply-2", ".user-reply-2-result");
    toggleEmailOverlay(".email-overlay-btn", ".email-overlay-message");
    toggleEmailOverlay(
        ".email-overlay-message-close",
        ".email-overlay-message"
    );
    manageEditor(".editorCompose");
    manageEditor(".editorMessage");
    manageEditor(".editorMessage-two");
    adjustWindowMode(
        ".full-window-trigger",
        ".email-overlay-message",
        "window-full"
    );
    toggleCheckboxGroup(".radio-group input");
    initializeDateRangePicker("dateRangePicker");
    initializeDatepicker("mini-datepicker");
    initializeDatepicker("singleDatepicker");
    updateNumberCounter(".countCategories", ".countNumber");
    setupSvgMap("svgMap");
    addZoomFunctionality(".svgMap-zoom-in-button", "uil-plus");
    addZoomFunctionality(".svgMap-zoom-out-button", "uil-minus");
    manageCheckboxGroups("inboxIndeterminate", "input.checkboxItem");
    manageCheckboxGroups("checkAll", "input.checkboxItem");
    manageCheckboxGroups("checkAllExport", "input.checkboxItemExport");
    manageCheckboxGroups("flexCheckIndeterminate", "input.checkboxItem");
    setIndeterminateCheckboxState("indeterminate");
    handleCheckedOrDisabled();
    filterGalleryItems(".mixitup-gallery");
    manageIconsUni(".feIcon-list-box", "data/icons.json");
    manageIconsLine(".lineIcon-list-box", "data/icons.json");
    updateRandomNumber(
        "badge-number",
        "badge-number-increase",
        "badge-number-decrease"
    );
    toggleSwitch("switch-selector", "switch-on", "active");
    toggleClassOutsideClick(
        "author-dropdown",
        "right-ellipsis-trigger",
        "active"
    );
    toggleClassOutsideClick(
        "inbox-sidebar-selector",
        "inbox-sidebar-target",
        "nav-open"
    );
    toggleClassOutsideClick(
        "chat-sidebar-selector",
        "chat-sidebar-target",
        "nav-open"
    );
    toggleClassOutsideClick(
        "faq-sidebar-selector",
        "faq-sidebar-target",
        "nav-open"
    );
    insertInlineSvg("img.svg");
    handleInboxStars(".toggle-active");
    initializeDatepicker("widget-datepicker");
    manageUpcomingEvents(
        ".event-title",
        ".edit-event-title",
        ".remove-event-wrapper"
    );
    manageUpcomingEvents(
        ".task-title",
        ".edit-task-title",
        ".remove-task-wrapper"
    );
    manageUpcomingEvents(".todo-title", "", ".remove-todo-wrapper");
    highlightActiveMenuItem(".chat-last-message", ".chat-wrapper");
    enableDownload(".downloaded-link");
    placeholderImage(
        ".placeholder-image",
        "images/avatars/placeholder-image.png"
    );
    imageUpload(
        "profile-upload-image",
        "profile-dropzone-file",
        "profileImage"
    );
    imageUpload(
        "widget-profile-upload-image",
        "widget-profile-dropzone-file",
        "widgetProfileImage"
    );
    imageUpload(
        "web-icon-upload-image",
        "web-icon-dropzone-file",
        "webIconImage"
    );
    imageUpload(
        "logo-image-upload-image",
        "logo-image-dropzone-file",
        "webLogoImage"
    );
    imageUpload(
        "altlogo-image-upload-image",
        "altlogo-image-dropzone-file",
        "alternateLogoImage"
    );
    imageUpload(
        "heroes-upload-image",
        "heroes-image-dropzone-file",
        "heroLogoImage"
    );
    socialPost();
    customTab(".tabs", '[role="tab"]', '[role="tabpanel"]');
    followButtons(".follow-button", "active", "follow", "following");
    switchGroup(".switch-trigger", ".switch-group");
    multiPriceRange("slider-padding");
    setupProductCount(
        ".product-container",
        ".productItemsNumber",
        ".productItemsDown",
        ".productItemsUp",
        ".productItems"
    );
    zoomHover(".zoomable");
    tableDragAndDrop("tableDragAndDrop");
    invoice();
    selectable();
    rainColorSwitch();
}

setTimeout(function () {}, 2000);

window.addEventListener("resize", function () {});

window.addEventListener("scroll", function () {
    makeSocialIconsSticky("sticky-social");
});

document.addEventListener("DOMContentLoaded", function () {
    content_ready_scripts();
});
