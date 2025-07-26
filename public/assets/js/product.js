const addToWishlist = (productId, element) => {
    event.preventDefault();
    if (!isLoggedIn) {
        showAuthModal(element);
        return;
    }
};
