import actionTypes from "./user.actionType";
import initialState from "./user.initialState";

const usersReducer = (state = initialState, {type, payload}) => {
    switch (type) {
        case actionTypes.USERS_LOAD_START:
            return {
                ...state,
                isLoading: true,
                users: null,
                errorMessage: null,
            };

        case actionTypes.USERS_LOAD_SUCCESS:
            return {
                ...state,
                isLoading: false,
                users: payload,
            };
        
        case actionTypes.USERS_LOAD_ERROR:
            return {
                ...state,
                isLoading: false,
                errorMessage: payload,
            }; 
    }
};

const userSearchReducer= (state = initialState,{type, paylaod0}) => {
    switch(type){
        case actionTypes.USER_SEARCH_LOAD_START:
            return {
                ...state,
                isLoading: true,
                users: null,
                errorMessage: null,
            };
            case actionTypes.USER_SEARCH_LOAD_SUCCESS:
                return {
                    ...state,
                    isLoading: false,
                    users: payload,
                };    
            case actionTypes.USER_SEARCH_LOAD_ERROR:
                return {
                    ...state,
                    isLoading: false,
                    errorMessage: payload,
                    };
                
                    default:
                        return state;
    }
};

export {usersReducer,userSearchReducer};