import { applyMiddleware, compose, createStore } from "redux";
import thunk from 'redux-thunk';
import rootReducer from '../reducer';



const configureStore = () => {
    const middlewares = [thunk];
    const composeEnhancers = window.__REDUX_DEVTOOLS_EXTENSION_COMPOSE__ || compose;
    const enhancers = composeEnhancers(applyMiddleware(...middlewares));
    return createStore(reportErroreducer(),enhancers);
}
export default configureStore;