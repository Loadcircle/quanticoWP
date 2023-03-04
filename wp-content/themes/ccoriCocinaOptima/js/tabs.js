"use strict";

window.documentReady.then(function () {
  var tabs = {};
  var triggers = {};
  var currentTabId = '';
  var tabWrapper = document.querySelector('.tabs');
  var tabTriggers = tabWrapper.querySelector('.tab-triggers').firstElementChild;
  var tabPages = tabWrapper.querySelector('.tab-pages');
  var selectTriggerResponsive = document.createElement('select');

  selectTriggerResponsive.onchange = function () {
    window.location.href = "".concat(window.location.pathname, "#").concat(this.value);
  };

  tabPages.querySelectorAll('.tab-page').forEach(function (tabPage) {
    var triggerLink = document.createElement('a');
    triggerLink.innerHTML = tabPage.dataset.title;
    triggerLink.href = "".concat(window.location.pathname, "#").concat(tabPage.id);
    tabTriggers.appendChild(triggerLink);
    triggers[tabPage.id] = triggerLink;
    tabs[tabPage.id] = tabPage;
    var opt = document.createElement('option');
    opt.value = tabPage.id;
    opt.innerHTML = tabPage.dataset.title;

    if (window.location.hash !== '' && window.location.hash === "#".concat(tabPage.id)) {
      opt.setAttribute('selected', 'selected');
    }

    selectTriggerResponsive.appendChild(opt);
  });
  tabTriggers.parentNode.appendChild(selectTriggerResponsive);

  var hideTab = function hideTab(tabId) {
    tabs[tabId].classList.remove('active');
    triggers[tabId].classList.remove('active');
  };

  var showTab = function showTab(tabId) {
    tabs[tabId].classList.add('active');
    triggers[tabId].classList.add('active');
  };

  var switchToTab = function switchToTab(nextTabId) {
    nextTabId = nextTabId.replace(/^#/, '');

    if (selectTriggerResponsive.value !== nextTabId) {
      selectTriggerResponsive.value = nextTabId;
    }

    if (currentTabId !== '') {
      hideTab(currentTabId);
    }

    if (nextTabId === '') {
      nextTabId = tabPages.firstElementChild.id;
    }

    showTab(nextTabId);
    currentTabId = nextTabId;
  };

  window.addEventListener('hashchange', function (e) {
    e.preventDefault();
    switchToTab(window.location.hash);
  }, false);
  switchToTab(window.location.hash);
  tabWrapper.classList.add('ready');
});