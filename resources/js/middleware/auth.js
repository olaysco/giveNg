/**
 * Auth middleware
 * @param to
 * @param from
 * @param next
 * @description prevent unathenticated user from
 * accessing protected page
 * and redirects back to login
 * and redirect authenticated user from login to profile
 */
function authMiddleware(to, from, next, store)
{
    console.log(to.path);
    if ((to.path === "/login"
        || to.path === "/register")
        && isLoggedIn(store)) {
        return next({path: "/profile"})
    }
    if (!to.meta.guest
        && !isLoggedIn(store)) {
        return next({path: "/login"})
    }
    return next()
}

function isLoggedIn(store)
{
    return store.state.authStore.authUser
        && store.state.authStore.authUser.email;
}

export { authMiddleware };
