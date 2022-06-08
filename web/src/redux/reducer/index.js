import { combineReducers } from "redux";
import * as user from './user/user.reducer';

const rootReducer = () =>
    combineReducers({
        users: user.usersReducer,
        userSearch: user.userSearchReducer,
    })
export default rootReducer;