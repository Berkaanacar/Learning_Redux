import actionTypes from "./user.actionType";

const usersLoadStart = () => ({
    type: actionTypes.USERS_LOAD_START,
});

const usersLoadSuccess = (users) => ({
    type: actionTypes.USERS_LOAD_SUCCESS,
    payload: users,
});

const usersLoadError = (errorMessage) => ({
    type: actionTypes.USERS_LOAD_ERROR,
    payload: errorMessage,
});

const usersSearchLoadStart = () => ({
    type: actionTypes.USERS_SEARCH_LOAD_START,
});
const usersSearchLoadSuccess = (users) => ({
    type: actionTypes.USERS_SEARCH_LOAD_SUCCESS,
    payload: users,
});
const usersSearchLoadError = (errorMessage) => ({
    type: actionTypes.USERS_SEARCH_LOAD_ERROR,
    payload: errorMessage,
});

export default {
    usersLoadStart,
    usersLoadSuccess,
    usersLoadError,
    usersSearchLoadStart,
    usersSearchLoadSuccess,
    usersSearchLoadError,
};