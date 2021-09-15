import {Commit, Dispatch} from 'vuex';

export interface CanvasItem {
    "label": string,
    "id": string,
    "x": number,
    "y": number,
    "width": number,
    "height": number,
}

export interface TestingState {
    list: CanvasItem[],
}


export default {
    namespaced: true,
    state: (): TestingState => ({
        list: [],
    }),
    mutations: {
        addItem(state: TestingState, item: CanvasItem): void {
            state.list.push(item);
        },
        removeItem(state: TestingState, item: CanvasItem): void {
            const index = state.list.findIndex(c => c.id == item.id);
            state.list.splice(index, 1);
        },

    },
    actions: {

        addItem({commit, state}: { commit: Commit, state: TestingState }, item:CanvasItem):void {

            console.log(item)
            commit("addItem", item);
        },
        removeItem({commit, state}: { commit: Commit, state: TestingState }, item:CanvasItem):void {

            console.log(item)
            commit("removeItem", item);
        },

    },


}
