<div>
    <div class="flex flex-col items-center">
        <div class="flex justify-center items-center p-16 gap-4 mx-auto">
            <input type="number" wire:model="num1" placeholder="Number 1">
            <select wire:model="action" class="w-24">
                <option>action</option>
                <option>+</option>
                <option>-</option>
                <option>x</option>
                <option>/</option>
                <option>%</option>
            </select>
            <input type="number" wire:model="num2" placeholder="Number 2">
            <button 
                wire:click="calculate"
                class="py-2 px-4 bg-indigo-500 hover:bg-indigo-600 disabled:cursor-not-allowed disabled:bg-opacity-90 rounded text-white"
                {{ $disabled ? ' disabled': '' }}>
                =
            </button>
        </div>
        <span class="text-3xl">
            {{ $result }}
        </span>
    </div>
</div>
