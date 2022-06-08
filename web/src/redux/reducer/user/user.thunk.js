import UserService from "../../../services/user.service";
import actions from "./user.action";
ç


export const loadUsersAsync = () => (dispatch) => {
    dispatch(actions.usersLoadStart());

    UserService.getAllUser()
        .then((Response) => dispatch(actions.usersLoadSuccess(response.data)))
        .catch((error) => dispatch(actions.usersLoadError(error.message)));
    
};

export const loadUserSearchAsync = (payload) => (dispatch) => {
    dispatch(actions.userSearchLoadStart());

    UserService.getSearchUser()
    .then((Response) => dispatch(actions.userSearchLoadSuccess(response.data)))
    .catch((error) => dispatch(actions.userSearchLoadError(error.message)));

};